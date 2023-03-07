<?php 

namespace Model;

class Answer extends ActiveRecord{

  protected static $table = 'answers';
  protected static $columnsDB = ['id', 'optionId', 'questionId', 'pollId'];

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->optionId = $args['optionId'] ?? null;
    $this->questionId = $args['questionId'] ?? null;
    $this->pollId = $args['pollId'] ?? null;
  }

}

?>