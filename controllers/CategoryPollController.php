<?php 

namespace Controllers;

use Model\CategoryPolls;
use MVC\Router;

class CategoryPollController{

  public static function list(Router $router){

    $categories = CategoryPolls::all();
    
    $router->renderPolls('categoryPolls/list', [
      'title' => 'Categorías',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname'],
      'categories' => $categories
    ]);
  }

  public static function create(Router $router){

    $category = new CategoryPolls();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $category->syncUp($_POST);
      
      $alerts = $category->validateNewCategory();

      if(empty($alerts)){

        $result = $category->save();

        if($result){
          header('Location: ' . $_ENV['HOST'] . '/categories/list?alert=success');
        }else{
          $alerts = CategoryPolls::setAlert('error', 'Hubo un problema al crear la categoría');
        }

      }

    }

    $alerts = CategoryPolls::getAlerts();

    $router->renderPolls('categoryPolls/create', [
      'title' => 'Crear categoría',
      'userName' => '' . $_SESSION['name'] . ' ' . $_SESSION['surname'], 
      'alerts' => $alerts
    ]);
    
  }

}

?>