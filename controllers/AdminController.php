<?php 

namespace Controllers;

use MVC\Router;

class AdminController{

  public static function index(Router $router){

    $router->renderAdmin('index', [
      'title' => 'Administrador',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname']
    ]);

  }


}

?>