<?php 

namespace Model;

class Question extends ActiveRecord{

  protected static $table = 'questions';
  protected static $columnsDB = ['id', 'name', 'pollId', 'typeId'];

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->name = $args['name'] ?? '';
    $this->pollId = $args['pollId'] ?? null;
    $this->typeId = $args['typeId'] ?? null;
  }

}

?>