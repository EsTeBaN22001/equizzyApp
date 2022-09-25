<?php 

namespace Model;

class CategoryPolls extends ActiveRecord{

  protected static $table = 'categorypoll';
  protected static $columnsDB = ['id', 'name'];

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->name = $args['name'] ?? '';
  }

  public function validateNewCategory(){

    if(!$this->name){
      self::$alerts['error'][] = 'El nombre es obligatorio';
    }

    return self::$alerts;

  }

}

?>