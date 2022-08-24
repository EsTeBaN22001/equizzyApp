<?php 

namespace Controllers;

use MVC\Router;

class PollsController{

  public static function polls(Router $router){

    $router->renderPolls('polls/polls', [
      'title' => 'Encuestas'
    ]);
  }

  public static function categories(Router $router){

    $router->renderPolls('polls/categories', [
      'title' => 'Encuestas'
    ]);
  }

}

?>