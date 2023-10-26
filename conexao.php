<?php
class db{
 private $host = "localhost";
 private $user = "root";
 private $password = "";
private $database = "seducation";
private $port = 3310;

function conecta_mysql(){

      $conecta = new mysqli($this->host, $this->user, $this->password , $this->database, $this->port);
        if ($conecta->connect_errno) {
           echo "Erro";
        } else{
          return $conecta;
        }
      }
    }
?>
