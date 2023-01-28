<?php 

namespace Controllers;

use Model\User;
use MVC\Router;

class ProfileController{

  public static function profile(Router $router){

    // Obtener el usuario de la sesión
    $user = User::find($_SESSION['id']);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $user->syncUp($_POST);

      $alerts = $user->validateProfile();

      if(empty($alerts)){

        $result = $user->save();

        if($result){
          header('Location: ' . '/profile?alert=success');
        }

      }

    }

    $router->renderPolls('principalPages/profile', [
      'title' => 'Perfíl',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname'],
      'name' => $user->name,
      'surname' => $user->surname,
      'email' => $user->email,
      'alerts' => $alerts ?? []
    ]);
  }

  public static function changePassword(Router $router){

    $user = User::find($_SESSION['id']);
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $user->syncUp($_POST);

      $actualPassword = $_POST['actualPassword'] ?? '';
      $newPassword = $_POST['newPassword'] ?? '';
      $confirmPassword = $_POST['confirmPassword'] ?? '';

      if(!password_verify($actualPassword, $user->password)){

        $alerts = $user->setAlert('error', 'La contraseña actual es incorrecta');

      }else{

        if(!($newPassword === $confirmPassword)){

          $alerts = $user->setAlert('error', 'La nueva contraseña no coincide con la confirmación');

        }else{

          $user->password = $newPassword;
          $user->hashPassword();
          unset($user->newPassword);
          unset($user->confirmPassword);
          
          $result = $user->save();

          if($result){
            header('Location: /profile?alert=success');
          }

        }

      }

    }

    $alerts = User::getAlerts();

    $router->renderPolls('principalPages/changePassword', [
      'title' => 'Cambiar contraseña',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname'],
      'alerts' => $alerts,
    ]);
    
  }
  
}

?>