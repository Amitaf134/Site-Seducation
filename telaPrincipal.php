<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html>

<head>
  <title>Seducation</title>
  <link href="img/logos.png" rel="icon">
  <link href="css/estilo.css" rel="stylesheet">
  <link href="css/perfil.css" rel="stylesheet">

  <!--fontes-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jaldi&display=swap" rel="stylesheet">

  <!--JavaScript-->
  <script type="text/javascript" src="js/PgInicial.js"></script>
  <script type="text/javascript" src="js/postagem.js"></script>
  <meta charset="utf-8">
</head>

<body>
  <header>
    <img src="img/logos.png" id="logo">

    <!--Barra de Pesquisa-->
    <div class="brrPesq" onmouseleave="barraV()">
      <input type="text" id="brPesq" placeholder="Pesquisar..." onmouseenter="mostrarB()">
      <button id="btPesq" type="submit" onclick="barraPesq()"></button>
    </div>
    <!-- foto de perfil -->
    <a href="perfil.php" class="fotinha"><img src="<?php echo $_SESSION['caminhoImg'] ?>" id="logo"></a>
  </header>
  <nav class=" menu">
    <ul>
      <li><a href="index.php">Início</a></li>
      <li><a href="artigo.php">Artigos</a></li>
      <li><a href="inform.php">Informações</a></li>
      <li><a href="sobrenos.php">Sobre nós</a></li>
    </ul>
  </nav>

  <section class="conteinerPost">
    <h2>Postagens</h2>
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

  <footer>
  <button id="btPublicar" class="btPubli" type="button" onclick="postagem()"> + </button>
  </footer>

</body>

</html>