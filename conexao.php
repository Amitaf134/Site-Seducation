<?php
  $usuario = 'fat';
  $senha = 'ami123';
  $database = 'seducation';
  $host ='localhost';
  $port = '3310';

  $mysqli = new mysqli($host, $usuario, $senha , $database, $port);

  if($mysqli->error){
    die("Falha ao conectar ao banco de dados".$mysqli->error);
  }else{
    echo("deu certo");
  }
?>