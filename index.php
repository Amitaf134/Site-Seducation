
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
  <script type="text/javascript" src="js/PagInicial.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
  <script type="text/javascript" src="js/cadastro.js"></script>
  <meta charset="utf-8">
</head>

<body>
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
      <li class="selecionado"><a href="index.html">Início</a></li>
      <li><a href="blogs.html">Blogs</a></li>
      <li><a href="inform.html">Informações</a></li>
      <li><a href="sobre.html">Sobre nós</a></li>
    </ul>
  </nav>

  <section class="conteiner">
    <h2>Assuntos em Alta</h2>
  </section>

  <section class="conteiner">
    <h2>Postagens</h2>
  </section>



  <!--Tela de login e cadastro-->
  <dialog class="telaLogin" id="login">
    <button id="sair" type="button" onclick="sair()" class="btSair">X</button>
    <h2>LOGIN</h2>
    <form method="dialog">
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
    <form method="POST" action="">
      <label for="nomeUser">Usuário</label>
      <input type="text" id="nomeUser">
      <br>
      <label for="email">Email</label>
      <input type="email" id="email">
      <br>
      <label for="senha">Senha</label>
      <input type="password" id="senha">
      <br>
      <label for="confirm_senha">Confirmar</label>
      <input type="password" id="confirm_senha">
      <br>
      <button id="btCdastrar" type="button" onclick="Csair()" class="botao">Cadastrar</button>

    </form>
  </dialog>

  <footer>
    <button id="btPublicar" class="btPubli" type="button">+</button>
  </footer>
</body>

</html>
