<?php 

namespace Controllers;

use Model\Poll;
use Model\RatePolls;

class StateAndRateController{
  
  // Obtiene el estado de la encuesta
  public static function getPublicState(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $poll = Poll::where('uniqId', $_POST['pollId']);
      
      if($poll){

        echo json_encode($poll->public);

      }
      
    }

  }
  
  // Cambia el estado de la encuesta
  public static function setPublicState(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $poll = Poll::where('uniqId', $_POST['pollId']);
      
      if($poll && isset($_POST['state'])){

        if($_POST['state'] == 0){
          $poll->public = 1;
        }

        if($_POST['state'] == 1){
          $poll->public = 0;
        }

        $result = $poll->save();

        if($result){
          echo json_encode($poll->public);
        }

      }
      
    }

  }

  // Verificar si el usuario actual ya calificó la encuesta
  public static function verifyRate(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $response = ['isRated' => false];

      if(isset($_POST['pollUniqId'])){

        $poll = Poll::where('uniqId', $_POST['pollUniqId']);

        if($poll){

          $rate = RatePolls::where('pollId', $poll->id);

          if($rate && $rate->userId == $_SESSION['id']){
            $response = ['isRated' => true];
          }

        }

      }

      echo json_encode($response);

    }

  }

  // Guarda un registro en la base de datos sobre la calificación que le dió el usuario a la encuesta
  public static function addRatePoll(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $response = ['result' => false];
      
      if(isset($_POST['rate']) && isset($_POST['pollUniqId'])){

        // Busca si existe esa encuesta
        $poll = Poll::where('uniqId', $_POST['pollUniqId']);

        if($poll){
          
          $rate = RatePolls::where('pollId', $poll->id);

          if($rate && $rate->userId == $_SESSION['id']){

            $rate->rate = $_POST['rate'];

          }else{

            $rate = new RatePolls();
            $rate->rate = $_POST['rate'];
            $rate->pollId = $poll->id;
            $rate->userId = $_SESSION['id'];

          }

          // Guardar la nueva calificación en la base de datos
          $result = $rate->save();

          if($result){
            $response = ['result' => true];
          }
          
        }

      }
      
      echo json_encode($response);

    }

  }

}


?>