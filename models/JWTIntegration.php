<?php

namespace Model;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTIntegration{

  static public function createToken($userUniqId){

    $expTime = time() + (3600 * 24); // Token válido por 1 DÍA
    
    $payload = [
      'expTime' => $expTime,
      'userUniqId' => $userUniqId
    ];
    
    $jwt = JWT::encode($payload, $_ENV['JWT_PRIVATE_KEY'], 'HS256', $expTime);

    return $jwt;
    
  }

  static public function verifyToken(){

    $jwt = str_replace("\"", "", $_SERVER['HTTP_AUTHORIZATION']);

    $decoded = JWT::decode($jwt, new Key($_ENV['JWT_PRIVATE_KEY'], 'HS256'));

    if($decoded->expTime < time()){

      // El token ha expirado
      return false;

    }else{

      // El token es válido
      return true;

    }

  }

}

?>