<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<body>
  <?php
  include("cabecalho.php");
  ?>

  <section class="conteiner">
  <h2>Assuntos em Alta</h2>
  <div class="my-carousel">
    
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

    <script type="text/javascript">
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