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
  <script type="text/javascript" src="../js/PagInicial.js"></script>
  <script type="text/javascript" src="../js/login.js"></script>
  <script type="text/javascript" src="../js/cadastro.js"></script>
  <meta charset="utf-8">
</head>

<body>
  <!--cabeçalho-->
  <?php
  include("cabecalho.php");
  ?>

  <section class="conteiner">
    <h2> GRAVIDEZ NA ADOLESCÊNCIA </h2>

    <img src="img/artigosete.png" alt="Artigo 1" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 20px;" />

    <img src="img/artigooito.png" alt="Artigo 2" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 340px;" />

    <img src="img/artigonove.png" alt="Artigo 3" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 662px;" />

    <img src="img/artigodez.png" alt="Artigo 4" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 980px;" />

  </section>

  <section class="conteiner">
    <h2> MÉTODOS CONTRACEPTIVOS </h2>
  </section>

  <!--login e cadastro-->
  <?php
  include('loginCad.php');
  ?>
</body>

</html>