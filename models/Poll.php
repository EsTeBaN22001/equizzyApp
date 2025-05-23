<?php 

namespace Model;
use Model\ActiveRecord;

class Poll extends ActiveRecord{

  protected static $table = 'polls';
  protected static $columnsDB = ['id', 'uniqId', 'title', 'description', 'img', 'likes', 'public', 'categoryId', 'userId'];

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->uniqId = $args['uniqId'] ?? '';
    $this->title = $args['title'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->img = $args['img'] ?? '';
    $this->likes = $args['likes'] ?? 0;
    $this->public = $args['public'] ?? 0;
    $this->categoryId = $args['categoryId'] ?? null;
    $this->userId = $args['userId'] ?? null;
  }

  public function validateEditInfoPoll(){

    if(!$this->title){
      self::$alerts['error'][] = 'El título es obligatorio';
    }

    if(!$this->description){
      self::$alerts['error'][] = 'La descripción es obligatoria';
    }

    // if(strlen($this->description) > 500 || strlen($this->description < 1)){
    //   self::$alerts['error'][] = 'La descripción debe tener entre 1 y 500 carácteres';
    // }

    if(!$this->categoryId){
      self::$alerts['error'][] = 'Debes seleccionar una categoría';
    }

    return self::$alerts;

  }
  
  public function validateNewPoll(){

    if(!$this->title){
      self::$alerts['error'][] = 'El título es obligatorio';
    }

    if(!$this->description){
      self::$alerts['error'][] = 'La descripción es obligatoria';
    }

    if(strlen($this->description) > 500 || strlen($this->description < 1)){
      self::$alerts['error'][] = 'La descripción debe tener entre 1 y 500 carácteres';
    }

    if(!$this->categoryId){
      self::$alerts['error'][] = 'Debes seleccionar una categoría';
    }

    if(!$_FILES['img']['tmp_name']){
      self::$alerts['error'][] = 'La imagen es obligatoria';
    }

    return self::$alerts;

  }

}

?>