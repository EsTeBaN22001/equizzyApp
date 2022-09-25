<?php 

namespace Controllers;

use Model\Poll;
use MVC\Router;

class PollsController{

  public static function createPoll(Router $router){
    
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
    
    $router->renderPolls('polls/createPoll', [
      'title' => 'Crear encuesta',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname'],
      'alerts' => $alerts
    ]);

  }

}

?>