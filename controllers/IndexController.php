<?php 

namespace Controllers;

use MVC\Router;

class IndexController{

  public static function index(Router $router){

    $router->render('index', [
      'title' => 'Página principal'
    ]);

  }

  public static function profile(Router $router){

    $router->renderPolls('principalPages/profile', [
      'title' => 'Perfíl',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname']
    ]);
  }

}