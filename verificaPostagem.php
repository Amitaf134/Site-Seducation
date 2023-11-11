<?php
session_start();
include_once('conexao.php');
$bancoDados = new db();
$link = $bancoDados->conecta_mysql();

$text = $_POST['textinho'];
$codi = $_SESSION['codigo'];
echo $codi;

$sql = "INSERT INTO `postagem`(`texto`, `id_usuario`) VALUES('$text', '$codi')";
$statement = $link->prepare($sql);
if ($statement->execute()) {
  header('Location: telaPrincipal.php');
} else {
  echo "Erro";
}
