<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<body>
  <?php
  include("cabecalho.php");
  ?>

  <section class="container">
  <h2> Assuntos em Alta </h2>
  <button class="btPassarC" id="btDireito" arial-label="Previous image"> ⬅ </button>
  <button class="btPassarC" id="btEsquerdo" arial-label="Next image"> ➡ </button>

  <!-- overflow cm largura fixa -->
  <div class="gallery-wrapper">
    <!-- um elemento que irá se mover dentro do wrapper -->
    <div class="gallery" id="galeria1">
    
    <img src="img/artigoum.png" alt="Artigo 1" id="img-um" class="imgCarrosel"/>

    <img src="img/artigodois.png" alt="Artigo 2" id="img-um" class="imgCarrosel" />

    <img src="img/artigotres.png" alt="Artigo 3" id="img-um" class="imgCarrosel" />

    <img src="img/artigoseis.png" alt="Artigo 4" id="img-um" class="imgCarrosel"/>
   </div>
    
   <div class="gallery" id="galeria2">
    <img src="img/artigoonze.png" alt="Artigo 5" id="img-um" class="imgCarrosel" />
    <img src="img/artigoonze.png" alt="Artigo 5" id="img-um" class="imgCarrosel"/>
   </div>
</div>
</div>
</section>

<section class="conteiner">
    <h2>Postagens</h2>

  </section>
  <!--login e cadastro-->
  <?php
  include('loginCad.php');
  ?>

</body>

</html>