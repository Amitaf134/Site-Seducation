<?php
session_start();


include('conexao.php');
    $bancoDados = new db();
    $link = $bancoDados->conecta_mysql();

    $cod = $_SESSION['codigo'];
    $sqlSelect = "SELECT `biografia` FROM `usuario` WHERE `codigo`= '$cod'";

    $statement = $link->prepare($sqlSelect);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $sl = (object) $result;
    $_SESSION['biografia'] = $result['biografia'];
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
    <!-- comecei mas não terminei -->
    <img src="<?php echo $_SESSION['caminhoImg'] ?>" id="editarPerfilFoto">
    <form method="POST" action="verificaUsuario.php">
    
      <label for="lnome" style="position: absolute; left: 20px; top: 345px;"> Nome </label>
      <input type="text" id="nomeN" value="<?php echo $_SESSION['nomeUser'];?>" style="position: absolute; left: 110px; top:345px;">
      <br>

      <label for="lemail" style="position: absolute; left: 20px; top: 410px;"> Email: </label>
      <input type="email" name="emailN" id="emailN" value="<?php $email?>" style="position: absolute; left: 110px; top: 410px;">
      <br>
      <label for="bio" style="position: absolute; left: 20px; top: 465px;"> Bio </label>
      <input type="text" id="bioN" value="<?php echo $_SESSION['biografia'] ?>" style="position: absolute; left: 110px; top: 465px;">
      <br>
      <input id="salvar" name="salvar" type="submit" class="inputSubmit" value="Salvar" style="position: absolute; left: 164px; top: 500px;">

    </form>
    <?php
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
  </dialog>

</body>

</html>