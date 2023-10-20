<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Seducation</title>
  <link href="img/logos.png" rel="icon">
  <link href="css/estilo.css" rel="stylesheet">

  <!--fontes-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter&display=swap" rel="stylesheet">

  <!--JavaScript-->
  <script type="text/javascript" src="js/PgInicial.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
  <script type="text/javascript" src="js/cadastro.js"></script>
  <meta charset="utf-8">
</head>

<body>
  <?php
  include("cabecalho.php");
  ?>

  <section class="conteiner">
  <div class="my-carousel">
    <h2>Assuntos em Alta</h2>

    <!--duvidei ajeitarem isso aq hein hein hein duvidei -->
    <!--pois vai continuar duvidando :p -->
    <!-- filha da puta te odeio nossa smt por isso a gnt nao deu certo -->
    
    <img src="img/artigoum.png" alt="Artigo 1" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 20px;" />

    <img src="img/artigodois.png" alt="Artigo 2" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 340px;" />

    <img src="img/artigotres.png" alt="Artigo 3" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 662px;" />

    <img src="img/artigoseis.png" alt="Artigo 4" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 980px;" />

    <img src="img/artigoonze.png" alt="Artigo 5" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 1300px;" />

    <img src="img/artigoonze.png" alt="Artigo 5" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 1300px;" />

    <head>
<script 
src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script 
src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick.min.js"></script>
<script>
<script src="SiteSeducation/Site-Seducation/js/PagInicial.js"></script>
    </head>

<!-- Importando jQuery -->
    <script src="jquery-3.7.1.min.js"></>
    <script src="PgInicial.js"></script>

  $(document).ready(function() {
    $('.my-carousel').slick({
      dots: true,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      prefArrow: '<button class="my-prev">&larr;</button>',
      nextArrow: '<button class="my-next">&rarr;</button>',
      fade: true
    });
  });
</script>
</div>
</section>


<section class="conteiner">
    <h2>Postagens</h2>

  </section>
  <!--login e cadastro-->
  <?php
  include('loginCad.php');
  ?>

  <footer>
    <button id="btPublicar" class="btPubli" type="button"><a href="postagens.php">+</a></button>
  </footer>
</body>

</html>