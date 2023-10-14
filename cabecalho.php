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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jaldi&display=swap" rel="stylesheet">

  <!--JavaScript-->
  <script type="text/javascript" src="js/PgInicial.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
  <script type="text/javascript" src="js/cadastro.js"></script>
  <meta charset="utf-8">
</head>

<body>
<header>
    <!--duvidei fzr essa logo abrir tela hein hein hein duvidei-->
    <a href="perfil.php"><img src="img/logos.png" id="logo"></a>

    <!--Barra de Pesquisa-->
    <div class="brrPesq" onmouseleave="barraV()">
      <input type="text" id="brPesq" placeholder="Pesquisar..." onmouseenter="mostrarB()">
      <button id="btPesq" type="submit" onclick="barraPesq()"></button>
    </div>

    <!-- botões de login e cadastro-->
    <div class="bts">
      <button class="botao" id="btLogin" type="button" onclick="logar()">Login</button>
      <button class="botao" id="btCadastro" type="button" onclick="cadastrar()">Cadastrar</button>
    </div>

  </header>
  <nav class=" menu">
    <ul>
      <li><a href="index.php">Início</a></li>
      <li><a href="artigo.php">Artigos</a></li>
      <li><a href="inform.php">Informações</a></li>
      <li><a href="sobrenos.php">Sobre nós</a></li>
    </ul>
  </nav>
</body>
</html>
