<?php 

namespace Model;

class User extends ActiveRecord{

  protected static $table = 'users';
  protected static $columnsDB = ['id', 'uniqId', 'name', 'surname', 'email', 'password', 'admin'];

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
      self::$alerts['error'][] = 'El nombre es incorrecto';
    }

    if(!$this->surname){
      self::$alerts['error'][] = 'El apellido es incorrecto';
    }

    if(!$this->email){
      self::$alerts['error'][] = 'El correo es incorrecto';
    }

    if(!$this->password){
      self::$alerts['error'][] = 'La contraseña es incorrecta';
    }

    if(!$this->confirmPassword){
      self::$alerts['error'][] = 'La confirmación de la contraseña es incorrecta';
    }

    return self::$alerts;

  }

  public function validateLogin(){

    if(!$this->email){
      self::$alerts['error'][] = 'El correo es incorrecto';
    }

    if(!$this->password){
      self::$alerts['error'][] = 'La contraseña es incorrecta';
    }

    return self::$alerts;

  }

  public function startSession(){
    session_unset();

    $_SESSION['id'] = $this->id;
    $_SESSION['uniqId'] = $this->uniqId;
    $_SESSION['name'] = $this->name;
    $_SESSION['surname'] = $this->surname;
    $_SESSION['userName'] = $_SESSION['name'] . ' ' . $_SESSION['surname'];
    $_SESSION['email'] = $this->email;
    $_SESSION['login'] = true;
    $_SESSION['admin'] = $this->admin;

  }

  public function hashPassword(){

    $this->password = password_hash($this->password, PASSWORD_BCRYPT);

  }

}

?>