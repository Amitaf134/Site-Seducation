<?php
session_start();

include('conexao.php');
$bancoDados = new db();
$link = $bancoDados->conecta_mysql();

$nome = $_POST['nomeN'];
$email = $_POST['emailN'];
$biografia = $_POST['bioN'];

$cod = $_SESSION['codigo'];
$sqlUpdate = "UPDATE `usuario` SET `nome`='$nome', `email`='$email', `biografia`='$biografia' WHERE `codigo`='$cod'";
$statement = $link->prepare($sqlUpdate);
$statement->execute();

$result = $statement->fetch(PDO::FETCH_ASSOC);
header('Location: perfil.php');
?>
<html>

<head>
  <title> Perfil </title>
  <link href="css/perfil.css" rel="stylesheet">

  <!--fontes-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter&display=swap" rel="stylesheet">

  <!--JavaScript-->
  <script type="text/javascript" src="js/editarPerfil.js"></script>
  <script type="text/javascript" src="js/postagem.js"></script>

  <meta charset="utf-8">
</head>

<body>
  <header class="perfiheader">
    <img src="img/voltarPagina.png" style="position: absolute; top: 19px; left: 10px" width="30px" height="30px" width="30px" height="30px" onclick="window.location.href='telaPrincipal.php'">
    <img src="img/ondulacao.svg">
    <div class="imgPerfil">
      <a onclick="editar()" class="fotoPerfil"><img src="<?php echo $_SESSION['caminhoImg'] ?>" width="150px" height="150px"></a>
      <h3> <?php echo $_SESSION['nomeUser'] ?> </h3>
      <p><?php echo $_SESSION['biografia'] ?></p>
    </div>
  </header>

  <nav class="menu" id="menu">
    <ul>
      <li class="selecionado"><a href="perfil.php"> Postagens </a></li>
      <li><a href="curtidas.php"> Curtidas </a></li>
    </ul>
  </nav>

  <footer>
    <button id="btPublicar" class="btPubli" type="button" onclick="postagem()"> + </button>
  </footer>
  <?php
  include('postagens.php');
  ?>
  <!-- popup de editar o perfil -->
  <dialog class="telaEditar" id="editar">
    <button id="sair" type="button" onclick="sair()" class="btSair">X</button>
    <h3> Editar Perfil </h3>
    <img src="<?php echo $_SESSION['caminhoImg'] ?>" id="editarPerfilFoto">
    <form method="POST" action="verificaUsuario.php">
      <label for="lnome" id="lnome"> Nome: </label>
      <input type="text" id="nomeN" value="<?php echo $_SESSION['nomeUser']; ?>">
      <br>

      <label for="lemail" id="lemail"> Email: </label>
      <input type="email" name="emailN" id="emailN" value="<?php echo $_SESSION['email'] ?>">
      <br>
      <label for="bio" id="bio"> Biografia: </label>
      <input type="text" id="bioN">
      <br>
      <input id="salvar" name="salvar" type="submit" class="inputSubmit" value="Salvar">
    </form>
  </dialog>

  <section class="conteinerPost">
    <ul class="Ipostagens">
      <?php
      $bancoDados = new db();
      $link = $bancoDados->conecta_mysql();

      $sql = "SELECT * FROM postagem;";
      $statement = $link->prepare($sql);
      $statement->execute();

      while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
        $id_usuer = $result['id_usuario'];
        $texto = $result['texto'];

        $sql = "SELECT `nome`,`caminho` FROM usuario WHERE `codigo` = '$id_usuer';";
        $pegar = $link->prepare($sql);
        $pegar->execute();
        $user = $pegar->fetch(PDO::FETCH_ASSOC);

        $nome = $user['nome'];
        $imagem = $user['caminho'];

      ?>
        <li class="post">
          <img src="<?php echo $imagem; ?>" id="imgPost">
          <h4><?php echo $nome; ?></h4>
          <div class="textoPost">
            <p><?php echo $texto; ?></p>
            <div>
        </li>
      <?php
      }
      ?>
    </ul>

  </section>
</body>

</html>