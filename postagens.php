<html>

<head>
  <title> Postagens </title>
  <link href="img/logos.png" rel="icon">
  <link href="css/estilo.css" rel="stylesheet">

  <!--fontes-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter&display=swap" rel="stylesheet">

  <!--JavaScript-->
  <script type="text/javascript" src="../js/Cod.js"></script>
  <meta charset="utf-8">
</head>

<body>
  <dialog class="telaPostagem" id="Posts">
    <form method="post" action="verificaUsuario.php" id="posts">
      <img src="<?php echo $_SESSION['caminhoImg'] ?>" width="1rem" height="20px">
      <h4> <?php echo $_SESSION['nomeUser'] ?> </h4>
      <!-- <textarea> </textarea> -->
      <input id="postar" name="postar" type="submit" class="inputSubmit" value="Postar">
    </form>
  </dialog>
</body>

</html>