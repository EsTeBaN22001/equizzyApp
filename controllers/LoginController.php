<?php 

namespace Controllers;

use MVC\Router;

class LoginController{

  public static function login(Router $router){
    $router->renderLogin('login', [
      'title' => 'Iniciar sesión'
    ]);
  }

  public static function register(Router $router){
    $router->renderLogin('register', [
      'title' => 'Registrate'
    ]);
  }

}

?>