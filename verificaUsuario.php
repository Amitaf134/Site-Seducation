<?php
function cadastrarU()
{
  include('conexao.php');

  $usuario = $_POST['nomeUser'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $confirmSenha = $_POST['confirmSenha'];

  $sql = "INSERT INTO usuario(nome, email, senha) values($usuario, $email, $senha)";

  if (mysqli_query($conexao, $sql)) {
    echo ("Usuário cadastrado com sucesso!");
    //echo ("<a href='index.php' class='botao'>volte</a>");
  } else {
    echo ("ERRO!");
  }
}
