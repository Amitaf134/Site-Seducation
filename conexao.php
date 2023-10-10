<?php
  class db{

  private $user = 'user';
  private $password = 'user';
  private $database = 'seducation';
  private $host ='localhost';
  private $port = '3310';
  
  function conecta_mysql(){
    $mysqli = new mysqli($this->host, $this->user, $this->password , $this->database, $this->port);
    return $mysqli;
  }
   }
?>