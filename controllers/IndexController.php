<?php 

namespace Controllers;

use Model\Poll;
use MVC\Router;

class IndexController{

  public static function index(Router $router){

    // Obtiene encuestas con un límite de 6
    $query = "SELECT * FROM polls WHERE public = 1 LIMIT 6";
    $polls = Poll::consultSQL($query);
    
    $router->render('index', [
      'title' => 'Página principal',
      'polls' => $polls
    ]);

  }

}