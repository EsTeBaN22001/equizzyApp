<?php 

namespace Model;

use Model\ActiveRecord;

class RatePolls extends ActiveRecord{

  protected static $table = 'ratepolls';
  protected static $columnsDB = ['id', 'rate', 'pollId', 'userId'];

  public function __construct($args = []){
    
    $this->id = $args['id'] ?? null;
    $this->rate = $args['rate'] ?? null;
    $this->pollId = $args['pollId'] ?? null;
    $this->userId = $args['userId'] ?? null;

  }

}

?>