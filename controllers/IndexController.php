<?php 

namespace Controllers;

use MVC\Router;

class IndexController{

  public static function index(Router $router){

    $router->render('index', [
      'title' => 'Página principal'
    ]);

  }

  public static function polls(Router $router){
    
    $router->renderPolls('principalPages/polls', [
      'title' => 'Encuestas',
      'userName' => $_SESSION['name'] . ' ' . $_SESSION['surname'],
    ]);
  }

  public static function myPolls(Router $router){

    $router->renderPolls('principalPages/myPolls', [
      'title' => 'Mis encuestas',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname']
    ]);
  }

  public static function profile(Router $router){

    $router->renderPolls('principalPages/profile', [
      'title' => 'Perfíl',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname']
    ]);
  }

}