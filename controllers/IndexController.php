<?php 

namespace Controllers;

use Model\Poll;
use MVC\Router;

class IndexController{

  public static function index(Router $router){

    // Obtiene encuestas con un límite de 6
    $limit = 6;
    $polls = Poll::get($limit);
    
    $router->render('index', [
      'title' => 'Página principal',
      'polls' => $polls
    ]);

  }

  public static function profile(Router $router){

    $router->renderPolls('principalPages/profile', [
      'title' => 'Perfíl',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname']
    ]);
  }

}