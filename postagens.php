<html>

<head>
  <title> Postagens </title>
  <link href="img/logos.png" rel="icon">
  <link href="css/perfil.css" rel="stylesheet">

  <!--fontes-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter&display=swap" rel="stylesheet">

  <!--JavaScript-->
  <script type="text/javascript" src="js/postagem.js"></script>
  <meta charset="utf-8">
</head>

<body>
  <dialog class="telaPostagem" id="posts">
    <button id="sair" type="button" onclick="sair()"> X </button>
    <form method="post" action="verificaUsuario.php" id="posts">
      <img src="<?php echo $_SESSION['caminhoImg'] ?>" width="1rem" height="1rem">
      <h4> <?php echo $_SESSION['nomeUser'] ?> </h4>

      <textarea placeholder="O que está acontecendo..." rows="9" cols="50"> </textarea>
      <br> <br>
      <input id="postar" name="postar" type="submit" value="Postar">
    </form>
  </dialog>
</body>

</html>