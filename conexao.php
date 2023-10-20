<?php
$host = "localhost";
$user = "root";
$password = "root";
$database = "seducation";

$conecta = new mysqli($host, $user, $password, $database);
if ($conecta->connect_errno) {
  echo "Erro";
} else
  echo "Conexão efetuada com sucesso";
  
//precisa aparecer a mensagem de sucesso, é só rodar essa pagina a parte