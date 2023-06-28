<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\JWTIntegration;
use Model\Poll;

class SearchController{

  public static function search(){

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['searchContent'])){

      $verifyToken = JWTIntegration::verifyToken();

      if($verifyToken){

        $searchContent = $_POST['searchContent'] ?? '';

        $query = "SELECT uniqId, title, img FROM polls WHERE title LIKE '%" . $searchContent . "%';";

        $result = Poll::consultSQL($query);

        if($result){

          echo json_encode($result);
          
        }else{

          echo json_encode('no-result-search');

        }

      }else{

        echo json_encode('error');

      }

    }

  }

}

?>