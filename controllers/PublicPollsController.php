<?php 

namespace Controllers;

use Model\Option;
use Model\Poll;
use Model\Question;
use MVC\Router;

class PublicPollsController{

  public static function respond(Router $router){

    $questionsAndOptions = [];

    if($_GET['pollId']){

      $pollUniqId = $_GET['pollId'];
      $poll = Poll::where('uniqId', $pollUniqId);
      
      $query = "SELECT * FROM questions where pollId = $poll->id";
      $questions = Question::consultSQL($query);

      foreach($questions as $question){
        
        $options = Option::belongsTo('questionId', $question->id);

        $optionsName = [];

        foreach($options as $option){
          $optionsName[] = $option->name;
        }

        $questionsAndOptions[$question->name] = $optionsName;

      }

    }

    $router->renderPolls('pollRespond/respond', [
      'title' => 'Responder encuesta',
      'poll' => $poll,
      'questions' => $questionsAndOptions
    ]);


  }

}
