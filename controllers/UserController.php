<?php 

namespace Controllers;

use MVC\Router;

class UserController{

  public static function changePassword(Router $router){

    $router->renderPolls('polls/change-password', [
      'title' => 'Cambiar contraseña'
    ]);
    
  }
  
}

?>