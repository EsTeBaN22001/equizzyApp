<?php 

namespace Controllers;

use Model\Poll;
use Model\User;
use MVC\Router;
use Model\Question;
use Model\RatePolls;
use Model\CategoryPolls;
use Intervention\Image\ImageManagerStatic as Image;

class PollsController{

  // Vista que lista mis encuestas
  public static function listMyPolls(Router $router){

    $userPolls = Poll::belongsTo('userId', $_SESSION['id']);
    
    $router->renderPolls('polls/listMyPolls', [
      'title' => 'Mis encuestas',
      'userPolls' => $userPolls
    ]);
  }

  // Vista principal en donde se muestran todas las encuestas de todos los usuarios
  public static function list(Router $router){
    
    $router->renderPolls('polls/list', [
      'title' => 'Encuestas',
    ]);
  }

  // Vista para crear una nueva encuesta
  public static function create(Router $router){
    
    $poll = new Poll();

    // Obtener todas las categorías
    $categories = CategoryPolls::all();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
      $poll->syncUp($_POST);
      
      $alerts = $poll->validateNewPoll();

      if(empty($alerts)){

        $categoryExists = CategoryPolls::belongsTo('id', $poll->categoryId);
        
        if(!$categoryExists){
          $alerts = Poll::setAlert('error', 'La categoría no existe');
        }else{

          /**SUBIDA DE ARCHIVOS */
          // Generar nombre único para las imágenes
          $nameImage = md5(uniqid(rand(), true)). ".webp";

          // Setear la imagen
          $img = Image::make($_FILES['img']['tmp_name'])->fit(1024, 768)->encode('webp', 50);
          $poll->setImage($nameImage, $_ENV['POLLS_IMAGES_FOLDER']);

          $pollsImagesFolder = $_SERVER['DOCUMENT_ROOT'] . $_ENV['POLLS_IMAGES_FOLDER'];
          
          // Crear la carpeta si no existe para subir imagenes
          if(!is_dir($pollsImagesFolder)){
            mkdir($pollsImagesFolder);
          }

          // Guarda la imagen en el servidor
          $img->save($pollsImagesFolder . $nameImage);
          
          $userExists = User::belongsTo('id', $_SESSION['id']);
          
          if($userExists){

            $poll->userId = $_SESSION['id'];
            $poll->uniqId = md5(uniqid());
            
            $result = $poll->save();

            if($result){
              header('Location: /polls/edit?poll=' . $poll->uniqId);
            }

          }

        }

      }

    }

    $alerts = Poll::getAlerts();
    
    $router->renderPolls('polls/create', [
      'title' => 'Crear encuesta',
      'poll' => $poll,
      'alerts' => $alerts,
      'categories' => $categories
    ]);

  }

  // Vista en la que el creador de la encuesta puede ver y editar las preguntas y opciones de la encuesta
  public static function edit(Router $router){

    $pollId = isset($_GET['poll']) ? $_GET['poll'] : '';

    $poll = Poll::where('uniqId', $pollId);
    
    if(!$poll || $_SESSION['id'] != $poll->userId ){
      header('Location: /my-polls');
    }
    
    $questions = Question::belongsTo('pollId', $poll->id);

    $router->renderPolls('polls/edit', [
      'title' => 'Editar encuesta',
      'poll' => $poll,
      'questions' => $questions
    ]);
  }

  // Edita la información general de la encuesta
  public static function editInfo(Router $router){

    // Verifica si existe la encuesta pasada por parámetro
    $pollId = isset($_GET['poll']) ? $_GET['poll'] : '';

    $poll = Poll::where('uniqId', $pollId);

    if(!$poll || $_SESSION['id'] != $poll->userId ){
      header('Location: /my-polls');
    }

    // Guardar los cambios de la encuesta
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $poll->syncUp($_POST);
      
      $alerts = $poll->validateEditInfoPoll();

      if(empty($alerts)){

        $categoryExists = CategoryPolls::belongsTo('id', $poll->categoryId);
        
        if(!$categoryExists){
          $alerts = Poll::setAlert('error', 'La categoría no existe');
        }else{

          if($_FILES['img']['tmp_name'] !== ""){

            $nameImage = md5(uniqid(rand(), true)). ".webp";

            $img = Image::make($_FILES['img']['tmp_name'])->fit(1024, 768)->encode('webp', 50);
            $poll->setImage($nameImage, $_ENV['POLLS_IMAGES_FOLDER']);
  
            $pollsImagesFolder = $_SERVER['DOCUMENT_ROOT'] . $_ENV['POLLS_IMAGES_FOLDER'];
  
            if(!is_dir($pollsImagesFolder)){
              mkdir($pollsImagesFolder);
            }

            $img->save($pollsImagesFolder . $nameImage);
  
          }
  
          $userExists = User::belongsTo('id', $_SESSION['id']);

          if($userExists){

            $result = $poll->save();

            if($result){
              header('Location: /polls/edit?poll=' . $poll->uniqId);
            }else{
              $alerts = Poll::setAlert('error', 'Hubo algún problema al guarar la información');
            }

          }

        }

      }

    }

    // Obtener todas las categorías
    $categories = CategoryPolls::all();

    $alerts = Poll::getAlerts();
    
    $router->renderPolls('polls/editInfo', [
      'title' => 'Editar información',
      'poll' => $poll,
      'alerts' => $alerts,
      'categories' => $categories
    ]);
    
  }

  // Función para eliminar una encuesta
  public static function delete(){

    if(isset($_GET['poll'])){

      $poll = Poll::where('uniqId', $_GET['poll']);
      
      if(!$poll || $poll->userId !== $_SESSION['id']){
        header('Location: /my-polls');
      }

      $result = $poll->delete();

      if(!$result){
        header('Location: /my-polls?alert=error');
      }

      header('Location: /my-polls?alert=success');

    }

  }

  // Funciones helpers para algunas funcionalidades de la aplicación
  
  // Obtiene el estado de la encuesta
  public static function getPublicState(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $poll = Poll::where('uniqId', $_POST['pollId']);
      
      if($poll){

        echo json_encode($poll->public);

      }
      
    }

  }
  
  // Cambia el estado de la encuesta
  public static function setPublicState(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $poll = Poll::where('uniqId', $_POST['pollId']);
      
      if($poll && isset($_POST['state'])){

        if($_POST['state'] == 0){
          $poll->public = 1;
        }

        if($_POST['state'] == 1){
          $poll->public = 0;
        }

        $result = $poll->save();

        if($result){
          echo json_encode($poll->public);
        }

      }
      
    }

  }

  // Verificar si el usuario actual ya calificó la encuesta
  public static function verifyRate(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $response = ['isRated' => false];

      if(isset($_POST['pollUniqId'])){

        $poll = Poll::where('uniqId', $_POST['pollUniqId']);

        if($poll){

          $rate = RatePolls::where('pollId', $poll->id);

          if($rate && $rate->userId == $_SESSION['id']){
            $response = ['isRated' => true];
          }

        }

      }

      echo json_encode($response);

    }

  }

  // Guarda un registro en la base de datos sobre la calificación que le dió el usuario a la encuesta

  public static function addRatePoll(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $response = ['result' => false];
      
      if(isset($_POST['rate']) && isset($_POST['pollUniqId'])){

        // Busca si existe esa encuesta
        $poll = Poll::where('uniqId', $_POST['pollUniqId']);

        if($poll){
          
          $rate = RatePolls::where('pollId', $poll->id);

          if($rate && $rate->userId == $_SESSION['id']){

            $rate->rate = $_POST['rate'];

          }else{

            $rate = new RatePolls();
            $rate->rate = $_POST['rate'];
            $rate->pollId = $poll->id;
            $rate->userId = $_SESSION['id'];

          }

          // Guardar la nueva calificación en la base de datos
          $result = $rate->save();

          if($result){
            $response = ['result' => true];
          }
          
        }

      }
      
      echo json_encode($response);

    }

  }

}