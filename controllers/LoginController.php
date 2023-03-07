<?php 

namespace Controllers;

use Model\ActiveRecord;
use Model\JWTIntegration;
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

            $jwt = JWTIntegration::createToken($_SESSION['uniqId']);
            
            header('Location: /polls/list?t=' . $jwt);

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
            // Libera el parámetro temporal para confirmar la contraseña
            unset($user->confirmPassword);

            $result = $user->save();


            if($result){
              // Se le asigna el id al objeto de usuario porque al ser autoincrementable no se añade al momento de hacer la consulta
              $user->id = $result['id'];
              
              // Una vez asignado el id se inicia la sesión
              $user->startSession();

              header('Location: /polls/list');
            }

          }else{
            $alerts['error'][] = 'Las contraseñas no coinciden';
          }

        }

      }

    }
    
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