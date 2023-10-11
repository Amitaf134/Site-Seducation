<html>

<head>
  <title> Sobre nós </title>
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
  <header>
    <img src="img/logos.png" width="150px" height="150px">

    <!--Barra de Pesquisa-->
    <div class="brrPesq">
      <input type="text" id="brPesq" placeholder="Pesquisar...">
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
      <li class="selecionado"><a href="sobrenos.php">Sobre nós</a></li>
    </ul>
  </nav>

  <section class="conteiner">
    <h2> Sobre nós </h2>
    <h3> Nós, mulheres brasileiras</h3>
  </section>

  <!--Tela de login e cadastro-->
  <dialog class="telaLogin" id="login">
    <button id="sair" type="button" onclick="sair()" class="btSair">X</button>
    <h2>LOGIN</h2>
    <form method="POST">
      <label for="email">Email</label>
      <input type="email" id="email">
      <br>
      <label for="senha">Senha</label>
      <input type="password" id="senha">
      <br>
      <button id="btLogar" type="button" onclick="sair()" class="botao">Logar</button>
    </form>
  </dialog>

  <dialog class="telaCadastro" id="cadastro">
    <button id="sair" type="button" onclick="Csair()" class="btSair">X</button>

    <h2>Cadastrar</h2>
    <form method="post" action="verifica.php" id="usuario" target="">
      <label for="nomeUser">Usuário</label>
      <input type="text" id="nomeUser" name="nomeUser">
      <br>
      <label for="email">Email</label>
      <input type="email" id="email" name="email">
      <br>
      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha">
      <br>
      <label for="confirm_senha">Confirmar</label>
      <input type="password" id="confirm_senha" name="confirmSenha">
      <br>
      <button id="btCdastrar" type="submit" onclick="cadastrarU()" class="botao">Cadastrar</button>
    </form>

  </dialog>

</html>