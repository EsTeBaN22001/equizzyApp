<?php 

namespace Controllers;

use Model\Polls;
use MVC\Router;

class PollsController{

  public static function polls(Router $router){
    
    $router->renderPolls('polls/polls', [
      'title' => 'Encuestas',
      'userName' => $_SESSION['name'] . ' ' . $_SESSION['surname'],
    ]);
  }

  public static function categories(Router $router){

    $router->renderPolls('polls/categories', [
      'title' => 'Categorías',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname'],
    ]);
  }

  public static function myPolls(Router $router){

    $router->renderPolls('polls/my-polls', [
      'title' => 'Mis encuestas',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname']
    ]);
  }

  public static function profile(Router $router){

    $router->renderPolls('polls/profile', [
      'title' => 'Perfíl',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname']
    ]);
  }

}

?>