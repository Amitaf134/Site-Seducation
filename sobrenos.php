<html>

<head>
  <title> Sobre nós </title>
  <link href="img/logos.png" rel="icon">
  <link href="css/estilo.css" rel="stylesheet">
  <link href="css/sobre.css" rel="stylesheet">
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


  <section class="conteinerS">
    <h2> Sobre nós </h2>
  
    <div class="sobre">
      <div class="caixa_sobre">
        <img src="img/artigoum.png" id="imgSobre">
        <h1>Ana Clara</h1>
        <p>Olá, me chamo Ana Clara. Estou no 3°ano do ensino médio e gostaria de ser DBA.</p>

        <input type="button" class="botao" value="Saber mais">
      </div>

      <div class="caixa_sobre">
        <img src="img/artigoum.png" id="imgSobre">
        <h1>Diemilly</h1>
        <p>Olá, me chamo Diemilly. Estou no 3°ano do ensino médio e gostaria de ser Designer.</p>

        <input type="button" class="botao" value="Saber mais">
      </div>

      <div class="caixa_sobre">
        <img src="img/artigoum.png" id="imgSobre">
        <h1>Fatima</h1>
        <p>Olá, me chamo Fatima. Estou no 3°ano do ensino médio e gostaria de ser Herdeira.</p>

        <input type="button" class="botao" value="Saber mais">
      </div>
    </div>
  </section>

  <!--login e cadastro-->
  <?php
 include('loginCad.php');
 ?>

  </dialog>

</html>