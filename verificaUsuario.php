<?php

  include_once('conexao.php');
  $bancoDados = new db();
  $link = $bancoDados-> conecta_mysql();

  
  if (isset($_POST['cadastrar'])) {
  //aq ele ta verificando se os dados foram enviados, so q o problema é q nao estao mas ele nao da erro nenhum e o tabela ta vazia
    $usuario = $_POST['nomeUser'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmSenha = $_POST['confirmSenha'];

    $sql = "INSERT INTO `usuario`(`nome`, `email`, `senha`) values('$usuario', '$email', '$senha')";
    if (mysqli_query($link, $sql)) {
      echo "Usuário cadastrado com sucesso";
    } else {
      echo "Erro" . mysqli_connect_errno();
    }
}

?>