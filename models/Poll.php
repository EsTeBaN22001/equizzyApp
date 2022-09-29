<?php 

namespace Model;

class Poll extends ActiveRecord{

  protected static $table = 'polls';
  protected static $columnsDB = ['id', 'uniqId', 'title', 'img','likes', 'public', 'userId', 'categoryId'];

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->uniqId = $args['uniqId'] ?? '';
    $this->title = $args['title'] ?? '';
    $this->img = $args['img'] ?? '';
    $this->likes = $args['likes'] ?? 0;
    $this->public = $args['public'] ?? 0;
    $this->userId = $args['userId'] ?? null;
    $this->categoryId = $args['categoryId'] ?? null;
  }

  public function validateNewPoll(){

    if(!$this->title){
      self::$alerts['error'][] = 'El título es obligatorio';
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