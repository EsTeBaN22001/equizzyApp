<?php 

namespace Controllers;

use Model\Poll;
use MVC\Router;
use Model\CategoryPolls;

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

        $categoryExists = CategoryPolls::belongsTo('name', $category->name);

        if(count($categoryExists) > 0){
          $category::setAlert('error', 'La categoría ya existe');
        }else{
          $result = $category->save();
  
          if($result){
            header('Location: ' . $_ENV['HOST'] . '/categories/list?alert=success');
          }else{
            $alerts = CategoryPolls::setAlert('error', 'Hubo un problema al crear la categoría');
          }
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

  // Función para mostrar las encuestas por categorías
  public static function pollsByCategory(Router $router){

    // Verifica si existe la encuesta pasada por parámetro
    $categoryId = isset($_GET['category']) ? $_GET['category'] : '';

    $category = CategoryPolls::where('id', $categoryId);

    if(!$category){
      header('Location: /categories/list');
    }

    // Consulta a la base de datos para obtener todas las encuestas por id de la categoría y que sean públicas
    $query = 'SELECT * FROM polls where categoryId = ' . $categoryId . ' AND public = 1';
    $polls = Poll::consultSQL($query);
    
    $router->renderPolls('categoryPolls/pollsByCategory', [
      'title' => $category->name,
      'categoryName' => $category->name,
      'polls' => $polls
    ]);

  }

}

?>