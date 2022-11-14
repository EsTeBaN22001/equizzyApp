<?php 

namespace Model;

class Option extends ActiveRecord{

  protected static $table = 'options';
  protected static $columnsDB = ['id', 'name', 'questionId'];

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->name = $args['name'] ?? '';
    $this->questionId = $args['questionId'] ?? null;
  }

  public function validateName(){
    if(!$this->name || !is_string($this->name)){
      self::$alerts['error'][] = 'La opción introducida no es correcta';
    }
    return self::$alerts;
  }

}

?>