<?php 

namespace Model;

class User extends ActiveRecord{

  protected static $table = 'users';
  protected static $columnsDB = ['id', 'uniqid', 'name', 'surname', 'email', 'password', 'admin'];

  public function __construct($args = [])
  {
    $this->id = $args['id'] ?? null;
    $this->uniqId = $args['uniqId'] ?? null;
    $this->name = $args['name'] ?? '';
    $this->surname = $args['surname'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->password = $args['password'] ?? '';
    $this->confirmPassword = $args['confirmPassword'] ?? '';
    $this->admin = $args['admin'] ?? 0;
  }

  public function validateNewAccount(){

    if(!$this->name){
      self::$alerts['error'][] = 'El nombre es obligatorio';
    }

    if(!$this->surname){
      self::$alerts['error'][] = 'El apellido es obligatorio';
    }

    if(!$this->email){
      self::$alerts['error'][] = 'El correo es obligatorio';
    }

    if(!$this->password){
      self::$alerts['error'][] = 'La contraseña es obligatoria';
    }

    if(!$this->confirmPassword){
      self::$alerts['error'][] = 'La confirmación de la contraseña es obligatoria';
    }

    return self::$alerts;

  }

  public function startSession(){
    session_unset();

    $_SESSION['uniqId'] = $this->uniqId;
    $_SESSION['name'] = $this->name;
    $_SESSION['surname'] = $this->surname;
    $_SESSION['email'] = $this->email;
    $_SESSION['login'] = true;
    $_SESSION['admin'] = $this->admin;

  }

  public function hashPassword(){

    $this->password = password_hash($this->password, PASSWORD_BCRYPT);

  }

}

?>