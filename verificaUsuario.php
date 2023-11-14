<?php
session_start();
include_once('conexao.php');
$bancoDados = new db();
$link = $bancoDados->conecta_mysql();

if (isset($_POST['cadastrar'])) {

  $usuario = $_POST['nomeUser'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $confirmSenha = $_POST['confirmSenha'];

  if ($senha == $confirmSenha) {
    if ($_FILES['pic']['size'] != 0) {
      $conteudo = $_FILES['pic'];

      if ($conteudo['error']) {
        die("Falha ao enviar arquivo");
      }

      if ($conteudo['size'] > 2097152) {
        die("Arquivo muito grande!! MAX: 2MB");
      }

      $pasta = "img/icons/";
      $nomeArquivo = $conteudo['name']; //pegando o nome da imagem
      $novoNomeArquivo = uniqid(); //dando um nome unico para ela
      $extensaoArquivo = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION)); //pegando a extensao e transformando em minuscula
      $path = "$pasta" . "$novoNomeArquivo" . ".$extensaoArquivo";

      if ($extensaoArquivo != "jpg" && $extensaoArquivo != "png")
        die("Tipo de arquivo não aceito.");
      //vamos subir tanto a imagem para o banco, quanto para a pasta
      $foto = file_get_contents($conteudo["tmp_name"]);
      $tipo = $conteudo["type"];
      $deuCerto = move_uploaded_file($conteudo["tmp_name"], $pasta . $novoNomeArquivo . "." . $extensaoArquivo); //passando para a pasta img, por enquanto

      $sql = "INSERT INTO `usuario`(`nome`, `email`, `senha`,`caminho`, `foto`,`tipo`) values('$usuario', '$email', '$senha','$path','$conteudo','$tipo')";
      $statement = $link->prepare($sql);
      if ($statement->execute()) {
        echo "Usuário cadastrado com sucesso";
        $_SESSION['nomeUser'] = $usuario;
        $_SESSION['caminhoImg'] = $path;
        $_SESSION['email'] = $email;

        header('Location: index.php');
        echo "<div class = 'mensagemzinha'> Usuário Cadastrado! Por favor, faça o login! </div>";
      } else {
        echo "Erro";
      }
    } else {

      $path = "img/icons/perfilDois.png";
      $sql = "INSERT INTO `usuario`(`nome`, `email`, `senha`,`caminho`) values('$usuario', '$email', '$senha','$path')";
      $statement = $link->prepare($sql);
      if ($statement->execute()) {
        $_SESSION['nomeUser'] = $usuario;
        $_SESSION['caminhoImg'] = $path;
        $_SESSION['email'] = $email;
        header('Location: index.php');
        //<div class="mensagemzinhas"> "Usuário Cadastrado!" </div>
        echo "";
      } else {
        echo "Erro";
      }
    }
  } else {
    echo "Senhas não condizem";
  }
} else if (isset($_POST['logar'])) {
  $emailL = $_POST['lemail'];
  $senhaL = $_POST['lenha'];

  $sql = "SELECT `codigo`, `nome`, `caminho`, `biografia` FROM `usuario` WHERE `email`='$emailL'";
  $statement = $link->prepare($sql);
  $statement->execute();

  $result = $statement->fetch(PDO::FETCH_ASSOC);
  $sl = (object) $result;

  $total = $statement->rowCount();
  if ($total > 0) {
    $_SESSION['codigo'] = $result['codigo'];
    $_SESSION['nomeUser'] = $result['nome'];
    $_SESSION['caminhoImg'] = $result['caminho'];
    $_SESSION['biografia'] = $result['biografia'];
    $_SESSION['email'] = $emailL;

    header('Location: telaPrincipal.php');
  } else {
    echo ("Usuario não encontrado");
  } 
}