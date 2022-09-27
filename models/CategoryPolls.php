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

    $this->name = trim($this->name);
    
    if(!$this->name){
      self::$alerts['error'][] = 'El nombre es obligatorio';
    }

    if($this->name === strtolower($this->name)){
      self::$alerts['error'][] = 'La primera letra debe estar en mayúscula';
    }

    if(preg_match('/á|é|í|ó|ú|Á|É|Í|Ó|Ú|à|è|ì|ò|ù|À|È|Ì|Ò|Ù|ä|ë|ï|ö|ü|Ä|Ë|Ï|Ö|Ü|â|ê|î|ô|û|Â|Ê|Î|Ô|Û|ý|Ý|ÿ/', $this->name) === 1){
      self::$alerts['error'][] = 'El nombre no debe contener acentos';
    }
    
    return self::$alerts;

  }

}

?>