<?php 

namespace Model;

class Poll extends ActiveRecord{

  protected static $table = 'polls';
  protected static $columnsDB = ['id', 'uniqId', 'title', 'likes', 'public', 'userId', 'categoryId'];

  public function __construct($args = []){
    $this->id = $args['id'] ?? null;
    $this->uniqId = $args['uniqId'] ?? '';
    $this->title = $args['title'] ?? '';
    $this->likes = $args['likes'] ?? 0;
    $this->public = $args['public'] ?? 0;
    $this->userId = $args['userId'] ?? 'NULL';
    $this->categoryId = $args['categoryId'] ?? NULL;
  }

  public function validateCreatePoll(){

    if(!$this->title){
      self::$alerts['error'][] = 'El título es obligatorio';
    }

    return self::$alerts;

  }

}

?>