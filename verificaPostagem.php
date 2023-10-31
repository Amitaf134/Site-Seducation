<?php
session_start();
include_once('conexao.php');
$bancoDados = new db();
$link = $bancoDados->conecta_mysql();

$text = $_POST['textinho'];
$codi = $_SESSION['codiguinho'];

$sql = "INSERT INTO `postagem`(`id_usuario`, `texto`) VALUES('$codi', '$text')";
$statement = $link->prepare($sql);
if ($statement->execute()) {
  echo "Postagem cadastrada!";
} else {
  echo "Erro";
}
