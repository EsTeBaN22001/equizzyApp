<?php 

namespace Controllers;

use Model\Poll;
use Model\Question;

class QuestionController{

  public static function create(){

    $question = new Question();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
      if($_POST['name']){
        
        $question->syncUp($_POST);
        
        $alerts = $question->validateName();

        if(empty($alerts)){
          
          $poll = Poll::where('uniqId', $_POST['idPoll']);

          if($poll){

            $question->pollId = $poll->id;

            $result = $question->save();
  
            if($result){
              $response = [
                'response' => true,
              ];
            }else{
              $response = [
                'response' => false
              ];
            }

          }


        }else{
          $response = [
            'response' => false
          ];
        }

      }
      
      echo json_encode($response);

    }

  }

  public static function update(){
    
    if($_SERVER['REQUEST_METHOD']== 'POST'){
      
      if($_POST['id'] && $_POST['name']){

        $newNameQuestion = $_POST['name'];
        
        $question = Question::find($_POST['id']);
        
        if($question){
          
          if($newNameQuestion){

            $question->name = $newNameQuestion;
            
            $result = $question->save();

            if($result){
              $response = ['response' => true];
            }else{
              $response = ['response' => false];
            }
          }

        }else{
          $response = ['response' => false];
        }
      }
      

    }

    echo json_encode($response);

  }

  public static function delete(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      if($_POST['idQuestion']){

        $idQuestion = $_POST['idQuestion'];

        $question = Question::find($idQuestion);

        if($question){
          $result = $question->delete();

          if($result){
            $response = ['response' => true];
          }else{
            $response = ['response' => false];
          }
        }else{
          $response = ['response' => false];
        }

      }
      
      echo json_encode($response);
    }
  }

  public static function get(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
      if($_POST['idQuestion']){
        $idQuestion = $_POST['idQuestion'];

        $question = Question::find($idQuestion);

        if($question){
          echo json_encode($question);
        }
      }

    }
  }

}

?>