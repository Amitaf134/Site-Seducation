<?php
  class db{

  private $user = 'root';
  private $password = 'root';
  private $database = 'seducation';
  private $host ='localhost';
  private $port = '3306';
  
  function conecta_mysql(){
    $mysqli = new mysqli($this->host, $this->user, $this->password , $this->database, $this->port);
    return $mysqli;
  }
   }
