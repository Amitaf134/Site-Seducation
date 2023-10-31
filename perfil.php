<html>

<head>
  <title> Perfil </title>
  <link href="css/perfil.css" rel="stylesheet">

  <!--fontes-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter&display=swap" rel="stylesheet">

  <!--JavaScript-->
  <script type="text/javascript" src="js/editarPerfil.js"></script>

  <meta charset="utf-8">
</head>

<body>
  <header class="perfiheader">

    <!-- pra botao pra editar la no coisa -->
    <!-- ata, agora traduz -->
    <img src="img/voltarPagina.png" style="position: absolute; top: 19px; left: 10px" width="30px" height="30px" width="30px" height="30px" onclick="window.location.href='index.php'">
    <img src="img/ondulacao.svg" >
    <div class="imgPerfil">
      <!-- editar a foto/botão -->
   <button id="buttonEditar" type="button" onclick= "editar()" ><img src="img/perfil.png" width="150px" height="150px"></button>
    <h3> Jmilly </h3>
    <p>amo o flamengo (memtira)</p> 

</div>
  </header>

  <nav class="menu" id="menu">
    <ul>
      <li class="selecionado"><a href="perfil.php"> Postagens </a></li>
      <li><a href="curtidas.php"> Curtidas </a></li>
    </ul>
  </nav>

  <footer>
    <button id="btPublicar" class="btPubli" type="button" ><a href="postagens.php">+</a></button>
    
  </footer>

  <!-- popup de editar o perfil -->
  <dialog class="telaEditar" id="editar">
    <button id="sair" type="button" onclick="sair()" class="btSair">X</button>

    <h2> Editar Pefil </h2>
    <img src="pefilDois.png" id="editarPerfilFoto" width="75%" height="70%"/>
    <form method="POST" action="verificaUsuariophp.">

      <label for="nome" style="position: absolute; left: 20px; top: 345px;"> Nome </label>
      <input type="text" id="lnome" style="position: absolute; left: 110px; top: 430px;">
      <br>

      <label for="bio" style="position: absolute; left: 20px; top: 410px;"> Bio </label>
      <input type="text" id="lbio" style="position: absolute; left: 110px; top: 365px;">
      <br>
      
      <input id="salvar" name="salvar" type="submit" class="inputSubmit" value="Salvar" style="position: absolute; left: 164px; top: 500px;">

    </form>
  </dialog>

</body>

</html>