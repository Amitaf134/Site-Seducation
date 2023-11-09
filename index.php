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
    <!--emi-->
  <div class="slider-container">
    <div class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">


        <div class="slide">
          <img src="artigocinco.png " alt="">
        </div>
        <div class="slide">
          <img src="artigodez.png " alt="">
        </div>
        <div class="slide">
          <img src="artigodois.png" alt="">
        </div>
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>
      </div>
      <div class="navigation-bar">
        <label class="manual-btn" for="radio1"></label>
        <label class="manual-btn" for="radio2"></label>
        <label class="manual-btn" for="radio3"></label>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <!--emi-->
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