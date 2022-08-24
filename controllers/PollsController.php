<?php 

namespace Controllers;

use MVC\Router;

class PollsController{

  public static function polls(Router $router){

    $router->renderPolls('polls/polls', [
      'title' => 'Encuestas'
    ]);
  }

}

?>