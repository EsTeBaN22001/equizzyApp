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

}

?>