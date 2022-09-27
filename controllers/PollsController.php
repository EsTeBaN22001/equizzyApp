<?php 

namespace Controllers;

use Model\Poll;
use MVC\Router;

class PollsController{

  public static function list(Router $router){
    
    $router->renderPolls('polls/list', [
      'title' => 'Encuestas',
      'userName' => $_SESSION['name'] . ' ' . $_SESSION['surname'],
    ]);
  }

  public static function create(Router $router){
    
    $poll = new Poll();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
      $poll->syncUp($_POST);

      $alerts = $poll->validateCreatePoll();

      if(empty($alerts)){

        $poll->uniqId = md5(uniqid());
        $poll->userId = intval($_SESSION['id']);
        
        // $result = $poll->save();

      }
      
      

    }

    $alerts = Poll::getAlerts();
    
    $router->renderPolls('polls/create', [
      'title' => 'Crear encuesta',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname'],
      'alerts' => $alerts
    ]);

  }

}

?>