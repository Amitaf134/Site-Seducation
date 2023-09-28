<html>

<head>
  <title> Sobre nós </title>
  <link href="../img/logos.png" rel="icon">
  <link href="../css/estilo.css" rel="stylesheet">

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
   include('cabecalho.php');
   ?>

  <section class="conteiner">
    <h2>Assuntos em Alta</h2>
  </section>

  <section class="conteiner">
    <h2>Postagens</h2>
  </section>

  <!--Tela de login e cadastro-->
  <?php
   include('acesso.php');
   ?>


</html>