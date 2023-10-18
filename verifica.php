<?php
require_once('conexao.php');

function cadastrarU()
{
  $usuario = $_POST['nomeUser'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $confirmSenha = $_POST['confirmSenha'];
  $bancoDados = new db();
  $link = $bancoDados->conecta_mysql();

  $sql = "INSERT INTO `usuario`(`nome`, `email`, `senha`) values('$usuario', '$email', '$senha')";

  mysqli_query($link, $sql);

  echo ("<a href='index.php' class='botao'>volte</a>");
}
