<?php 

namespace Controllers;

use Model\Option;
use Model\Question;
use Model\JWTIntegration;
use Model\Poll;

class OptionController {

  public static function list(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $verifyToken = JWTIntegration::verifyToken();

      $poll = new Poll();

      if($verifyToken){

        $questionId = $_POST['idQuestion'];

        $options = Option::belongsTo('questionId', $questionId);
  
        echo json_encode($options);

      }else{

        echo json_encode('error');

      }

    }

  }
  
  public static function create(){

    $option = new Option();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $verifyToken = JWTIntegration::verifyToken();

      if($verifyToken){

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

      }else{

        echo json_encode('error');

      }

    }
  }

  public static function edit(){
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $verifyToken = JWTIntegration::verifyToken();

      if($verifyToken){

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

      }else{

        echo json_encode('error');

      }

    }

  }

  public static function delete(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $verifyToken = JWTIntegration::verifyToken();

      if($verifyToken){
      
        $response = ['response' => false];
      
        if($_POST['idOption']){
        
          $option = Option::find($_POST['idOption']);
        
          if($option){
        
            $result = $option->delete();
        
            if($result){
        
              $response = [
                'response' => true,
                'result' => $result
              ];
        
            }
        
          }
        
        }
        
        echo json_encode($response);
      
      }else{
      
        echo json_encode('error');
      
      }
      
    }

  }

}

?>