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
    <form method="post" action="verificaPostagem.php" id="posts">
      <div class="sesimg">
        <div class="box">
          <img src="<?php echo $_SESSION['caminhoImg'] ?>">
        </div>
        <div class="box">
          <h4> <?php echo $_SESSION['nomeUser'] ?> </h4>
        </div>
      </div>
      <textarea id="textinho" name="textinho" placeholder="O que está acontecendo..." rows="14" cols="55"> </textarea>
      <br> <br>
      <input id="postar" name="postar" type="submit" class="inputSubmit" value="Postar">
    </form>
  </dialog>
</body>

</html>