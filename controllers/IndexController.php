<?php 

namespace Controllers;

use Model\Poll;
use Model\RatePolls;
use MVC\Router;

class IndexController{

  public static function index(Router $router){

    // OBTENER LAS ENCUESTAS MÁS POPULARES

    // Obtener las calificaciones más altas
    $query = "SELECT id, rate, pollId, userId FROM ratepolls WHERE (pollId, rate) IN ( SELECT pollId, MAX(rate) AS max_rate FROM ratepolls GROUP BY pollId) ORDER BY rate DESC LIMIT 4;";
    $ratePolls = RatePolls::consultSQL($query);

    // Obtener las encuestas a partir de las calificaciones más altas
    $polls =[];
    
    foreach($ratePolls as $rate){

      $poll = Poll::where('id', $rate->pollId);

      if($poll->public == 1){
        array_push($polls, $poll);
      }

    }
    
    $router->render('index', [
      'title' => 'Página principal',
      'polls' => $polls
    ]);

  }

}