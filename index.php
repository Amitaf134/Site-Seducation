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
    <div class="container">
  <button class="arrow-left control" aria-label="Previous image"> ◀ </button>
  <button class="arrow-right control" aria-label="Next Image"> ▶ </button>
    
  <!-- overflow cm largura fixa -->
    <div class="gallery-wrapper">
    <!-- um elemento que irá se mover dentro do wrapper -->
    <div class="gallery" id="galeria1">

      <img src="img/artigoquatro.png" alt="Artigo Um" class="item current-item">
      <img src="img/artigodez.png" alt="Artigo Dez" class="item current-item">
      <img src="img/artigocinco.png" alt="Artigo Cinco" class="item current-item">
      <img src="img/artigoonze.png" alt="Artigo Onze" class="item current-item">
      <img src="img/artigotres.png" alt="Artigo Tres" class="item current-item">
      <img src="img/artigoseis.png" alt="Artigo Seis" class="item current-item">
      <img src="img/artigodoze.png" alt="Artigo Doze" class="item current-item">

    </div>
  </div>
</div>
  <!--emi-->
</section>

<section class="conteiner">
    <h2>Postagens</h2>
    <table>
				<tr>
					<th >Imagem</th>
          <th>nome</th>
					<th>texto</th>
				</tr>	
    <?php
    $bancoDados = new db();
    $link = $bancoDados->conecta_mysql();

    $sql ="SELECT * FROM postagem;";
    $statement = $link->prepare($sql);
    $statement->execute();
  
    while($result = $statement->fetch(PDO::FETCH_ASSOC)){
      $id_usuer = $result['id_usuario'];
      $texto = $result['texto'];

      $sql ="SELECT `nome`,`caminho` FROM usuario WHERE `codigo` = '$id_usuer';";
      $pegar = $link->prepare($sql);
      $pegar->execute();
      $user = $pegar->fetch(PDO::FETCH_ASSOC);
     
      $nome = $user['nome'];
      $imagem = $user['caminho'];

      ?>
      <tr>
        <td><img src="<?php echo $imagem;?>" width="50px"heigth="50px"></td>
       <td><?php echo $nome;?></td>
			 <td><?php echo $texto;?></td>
    </tr>
      <?php

    }
    

    ?>
    </table>

  </section>
  <!--login e cadastro-->
  <?php
  include('loginCad.php');
  ?>

</body>

</html>