<?php 

namespace Model;

class Question extends ActiveRecord{

  protected static $table = 'questions';
  protected static $columnsDB = ['id', 'name', 'pollId', 'typeId'];

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->name = $args['name'] ?? '';
    $this->pollId = $args['pollId'] ?? null;
    $this->typeId = $args['typeId'] ?? 1;
  }

  public function validateName(){

    if(!$this->name || $this->name == 'undefined'){
      self::$alerts['error'][] = 'Error en la pregunta';
    }

    return self::$alerts;

  }

}

?>