<?php 

namespace Controllers;

use Model\User;
use MVC\Router;

class LoginController{

  public static function login(Router $router){
    $router->renderLogin('login', [
      'title' => 'Iniciar sesión'
    ]);
  }

  public static function register(Router $router){

    $user = new User();

    $alerts = [];
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
      $user->syncUp($_POST);

      $alerts = $user->validateNewAccount();

      if(empty($alerts)){
        
        $userExists = User::where("email", $user->email);

        if($userExists){
          $alerts['error'][] = 'El correo ya está en uso';
        }else{
        
          $user->uniqId = md5(uniqid());
          
          // Verificar que las 2 contraseñas sean iguales
          if($user->password == $user->confirmPassword){

            $user->hashPassword();
            $user->admin = 0;
            unset($user->confirmPassword);

            $result = $user->save();

            if($result){

              $user->startSession();

              header('Location: /polls');
            }

          }else{
            $alerts['error'][] = 'Las contraseñas no coinciden';
          }

        }

      }

    }

    
    // $alerts = $user->getAlerts();
    
    $router->renderLogin('register', [
      'title' => 'Registrate',
      'user' => $user,
      'alerts' => $alerts
    ]);
  }

}

?>