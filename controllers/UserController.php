<?php 

namespace Controllers;

use MVC\Router;

class UserController{

  public static function changePassword(Router $router){

    $router->renderPolls('changePassword', [
      'title' => 'Cambiar contraseña',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname']
    ]);
    
  }
  
}

?>