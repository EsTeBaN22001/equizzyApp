<?php 

namespace Controllers;

use Model\Poll;
use MVC\Router;
use Model\CategoryPolls;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Question;
use Model\User;

class PollsController{

  public static function listMyPolls(Router $router){

    $userPolls = Poll::belongsTo('userId', $_SESSION['id']);
    
    $router->renderPolls('polls/listMyPolls', [
      'title' => 'Mis encuestas',
      'userPolls' => $userPolls
    ]);
  }

  public static function list(Router $router){
    
    $router->renderPolls('polls/list', [
      'title' => 'Encuestas',
    ]);
  }

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
          $img = Image::make($_FILES['img']['tmp_name'])->resize(1024, 768)->encode('webp', 70);
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

}
