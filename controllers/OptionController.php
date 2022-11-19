<?php 

namespace Controllers;

use Model\Option;
use Model\Question;

class OptionController {

  public static function list(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $questionId = $_POST['idQuestion'];

      $options = Option::belongsTo('questionId', $questionId);

      echo json_encode($options);

    }

  }
  
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
            $response = [
              'response' => true,
              'option' => $option,
              'result' => $result
            ];
          }

        }

      }

      echo json_encode($response);

    }
  }

  public static function edit(){
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $response = ['response' => false];

      if($_POST['name'] & $_POST['idOption']){

        $option = Option::find($_POST['idOption']);

        if($option){
  
          $option->name = $_POST['name'] ?? $option->name;

          $result = $option->save();

          if($result){

            $response = [
              'response' => true,
              'result' => $result,
              'option' => $option
            ];

          }
          
        }

      }
      
      echo json_encode($response);

    }

  }

}

?>