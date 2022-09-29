<?php 

namespace Controllers;

use Model\Poll;
use MVC\Router;
use Model\CategoryPolls;
use Intervention\Image\ImageManagerStatic as Image;
use Model\User;

class PollsController{

  public static function list(Router $router){
    
    $router->renderPolls('polls/list', [
      'title' => 'Encuestas',
      'userName' => $_SESSION['name'] . ' ' . $_SESSION['surname'],
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
          $img = Image::make($_FILES['img']['tmp_name'])->resize(800, 600)->encode('webp', 70);
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
              header('Location: /poll/edit?poll=' . $poll->uniqId);
            }

          }

        }

      }

    }

    $alerts = Poll::getAlerts();
    
    $router->renderPolls('polls/create', [
      'title' => 'Crear encuesta',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname'],
      'alerts' => $alerts,
      'categories' => $categories
    ]);

  }

}
