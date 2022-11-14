<?php 

namespace Controllers;

use Model\Option;
use Model\Question;

class OptionController {

  public static function create(){

    $option = new Option();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $response = ['response' => false];
      
      $option->syncUp($_POST);

      $question = Question::find('id', $option->questionId);

      if($question){

        $alerts = $option->validateName();

        if(empty($alerts)){

          $result = $option->save();

          if($result){
            $response = ['response' => true];
          }

        }

      }

      echo json_encode($response);

    }
  }

}

?>