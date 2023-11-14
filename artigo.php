<html>

<head>
  <title> Artigos </title>
  <link href="img/logos.png" rel="icon">
  <link href="css/estilo.css" rel="stylesheet">

  <!--fontes-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter&display=swap" rel="stylesheet">

  <!--JavaScript-->
  <script type="text/javascript" src="js/PagInicial.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
  <script type="text/javascript" src="js/cadastro.js"></script>
  <meta charset="utf-8">
</head>

<body>
  <!--cabeçalho-->
  <?php
  include("cabecalho.php");
  ?>

  <section class="container">
    <h2> Gravidez na Adolescência </h2>
    <!--emi-->
    <div class="carrosel">
      <button class="arrow-left control" id="esquerda" aria-label="Previous image"> ◀ </button>
      <button class="arrow-right control" id="direita" aria-label="Next Image"> ▶ </button>

      <!-- overflow cm largura fixa -->
      <div class="gallery-wrapper" id="gallery-wrapper">
        <!-- um elemento que irá se mover dentro do wrapper -->
        <div class="gallery" id="gallery1">

          <img src="img/artigodez.png" alt="Artigo Dez" class="item current-item">
          <img src="img/artigocinco.png" alt="Artigo Cinco" class="item current-item">
          <img src="img/artigotres.png" alt="Artigo Tres" class="item current-item">
        </div>
        <div class="gallery" id="gallery2">

          <img src="img/artigosete.png" alt="Artigo Onze" class="item current-item">
          <img src="img/artigooito.png" alt="Artigo Tres" class="item current-item">
        </div>

      </div>
    </div>
    <!--emi-->
  </section>

  <section class="conteiner">
    <h2> Identidade de Gênero e Autoestima </h2>
    <div class="carrosel">
      <button class="arrow-left control" id="esquerda" aria-label="Previous image"> ◀ </button>
      <button class="arrow-right control" id="direita" aria-label="Next Image"> ▶ </button>

      <!-- overflow cm largura fixa -->
      <div class="gallery-wrapper" id="gallery-wrapper">
        <!-- um elemento que irá se mover dentro do wrapper -->
        <div class="gallery" id="gallery1">

          <a href="adicionarartigo.php"> <img src="img/artigoquatro.png" alt="Artigo Um" class="item current-item" value="<?php $_SESSION['titulo'] ?>"> </a>
          <a href="adicionarartigo.php"> <img src="img/artigoonze.png" alt="Artigo Onze" class="item current-item"> </a>
        </div>
        <div class="gallery" id="gallery2">

          <img src="img/artigoum.png" alt="Artigo Um" class="item current-item">
          <img src="img/artigodois.png" alt="Artigo Dez" class="item current-item">
          <img src="img/artigoseis.png" alt="Artigo Cinco" class="item current-item">
        </div>

      </div>
    </div>
  </section>

  <!--login e cadastro-->
  <?php
  include('loginCad.php');
  ?>
</body>

</html>