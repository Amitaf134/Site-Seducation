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
  <button class="arrow-left control" arial-label="Previous image"> ⬅ </button>
  <button class="arrow-right control" arial-label="Next image"> ➡ </button>

  <!-- overflow cm largura fixa -->
  <div class="gallery-wrapper">
  <button class="arrow-left control" arial-label="Previous image"> ⬅ </button>
  <button class="arrow-right control" arial-label="Next image"> ➡ </button>
    <!-- um elemento que irá se mover dentro do wrapper -->
    <div class="gallery">
    
    <img src="img/artigoum.png" alt="Artigo 1" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 20px;" class="item1 current-item"/>

    <img src="img/artigodois.png" alt="Artigo 2" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 340px;" class="item2 current-item" />

    <img src="img/artigotres.png" alt="Artigo 3" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 662px;" class="item3 current-item" />

    <!-- img src="img/artigoseis.png" alt="Artigo 4" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 980px;" />

    <img src="img/artigoonze.png" alt="Artigo 5" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 1300px;" />

    <img src="img/artigoonze.png" alt="Artigo 5" id="img-um" width="340px" height="320px" border-radius="55%" 
    style="border-radius: 15px; margin-left: 1300px;" -->

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