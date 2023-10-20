<?php
function cadastrarU()
{
  include_once('conexao.php');
  //aq ele ta verificando se os dados foram enviados, so q o problema é q nao estao mas ele nao da erro nenhum e o tabela ta vazia
  if (isset($_POST['cadastrar'])) {
    $usuario = $_POST['nomeUser'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmSenha = $_POST['confirmSenha'];

    $sql = "INSERT INTO usuario(nome, email, senha) values('$usuario', '$email', '$senha')";
    if (mysqli_query($conecta, $sql)) {
      echo "Usuário cadastrado com sucesso";
    } else {
      echo "Erro" . mysqli_connect_errno();
    }
  }
}
