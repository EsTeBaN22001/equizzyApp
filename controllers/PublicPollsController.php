<?php 

namespace Controllers;

use Model\Answer;
use Model\Option;
use Model\Poll;
use Model\Question;
use MVC\Router;

class PublicPollsController{

  public static function respond(Router $router){
    
    // Verifica si existe la encuesta pasada por parámetro en la url
    Poll::exists('uniqId', $_GET['poll']);
    
    $questionsAndOptions = [];

    $pollUniqId = $_GET['poll'];
    $poll = Poll::where('uniqId', $pollUniqId);

    // Comprobar si la encuesta es PÚBLICA
    if($poll->public == 0){
      header('Location: '. $_SERVER["HTTP_REFERER"]);
    }
    
    $questions = Question::belongsTo('pollId', $poll->id);

    foreach($questions as $question){
      
      $options = Option::belongsTo('questionId', $question->id);

      $questionsAndOptions[$question->name] = $options;

    }

    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)){

      foreach($_POST as $question => $idOption){

        // Verificar si se contestaron todas las preguntas
        if(count($questions) != count($_POST)){
          header('Location: /polls/respond?poll=' . $_GET['pollId'] . '&alert=error');
          exit;
        }
        
        if($idOption){
          
          $option = Option::find($idOption);

          $args = [
            'optionId' => $option->id,
            'questionId' => $option->questionId,
            'pollId' => $poll->id
          ];
          
          $answer = new Answer($args);
  
          if($answer){

            $result = $answer->save();

            if($result){
              header('Location: /polls/answers?poll=' . $_GET['poll']);
            }else{
              header('Location: /polls/respond?poll=' . $_GET['poll']);
            }


          }
        }

      }

    }

    $router->renderPolls('publicPolls/respond', [
      'title' => 'Responder encuesta',
      'poll' => $poll,
      'questions' => $questionsAndOptions
    ]);

  }

  public static function answers(Router $router){
    
    // Verifica si existe la encuesta pasada por parámetro en la url
    Poll::exists('uniqId', $_GET['poll']);

    $poll = Poll::where('uniqId', $_GET['poll']);
    
    $router->renderPolls('publicPolls/answer', [
      'title' => 'Resultados de la encuesta',
      'pollTitle' => $poll->title
    ]);
  }

  public static function getAnswers(){

    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['uniqId'])){

      $poll = Poll::where('uniqId', $_POST['uniqId']);

      // Código para obtener un arreglo con todas las preguntas y las opciones
      $answersAll = Answer::belongsTo('pollId', $poll->id);
  
      // Arreglo definitivo para obtener las preguntas y la cantidad de opciones seleccionadas
      $answers = [];
  
      foreach($answersAll as $answer){
        
        // Código para obtener un arreglo con todas las preguntas y las opciones de las mismas
        $questionName = Question::where('id', $answer->questionId)->name;
  
        $optionsByQuestion = Option::belongsTo('questionId', $answer->questionId);
  
        // Arreglo que obtiene el nombre de la opción y la cantidad de votos de la misma
        $options = [];
        
        foreach($optionsByQuestion as $option){
          
          $optionsCount = count( Answer::belongsTo('optionId', $option->id));
          
          $options[$option->name] = $optionsCount;
        }
        
        $answers[$questionName] = $options;
  
      }

      echo json_encode($answers);

    }
      
  }

}
