<?php 

namespace Controllers;

use Model\User;
use MVC\Router;

class LoginController{

  public static function login(Router $router){

    $user = new User();

    $alerts = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $user->syncUp($_POST);

      $alerts = $user->validateLogin();

      if(empty($alerts)){

        $userExists = User::where('email', $user->email);
        
        if(!$userExists){
          User::setAlert('error', 'El usuario no existe');
        }else{

          if(password_verify($user->password, $userExists->password)){

            $userExists->startSession();
            
            header('Location: /polls/list');

          }else{
            User::setAlert('error', 'La contraseña es incorrecta');
          }

        }

      }

    }

    $alerts = User::getAlerts();
    
    $router->renderLogin('login', [
      'title' => 'Iniciar sesión',
      'alerts' => $alerts
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

              header('Location: /polls/list');
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

  public static function logout(){

    session_unset();

    header('Location: /');

  }

}

?>