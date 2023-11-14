<?php
session_start();
include_once('conexao.php');
$bancoDados = new db();
$link = $bancoDados->conecta_mysql();

$sql = "SELECT `titulo`, `link`, `resumo` FROM `artigo` WHERE `codigo`=1";
$statement = $link->prepare($sql);
$statement->execute();

$result = $statement->fetch(PDO::FETCH_ASSOC);
$sl = (object) $result;

$total = $statement->rowCount();
if ($total > 0) {
  $_SESSION['titulo'] = $result['titulo'];
  $_SESSION['link'] = $result['link'];
  $_SESSION['resumo'] = $result['resumo'];
}

?>
<!DOCTYPE html>
<html>

<head>
  <title> <?php echo $_SESSION['titulo'] ?> </title>
  <link href="img/logos.png" rel="icon">
  <link href="css/artigo.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">

  <!--fontes-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter&display=swap" rel="stylesheet">

  <meta charset="utf-8">
</head>

<body>

<?php
   include('cabecalho.php');
?>
   <section class="containerArtigo">
  <h2> <?php echo $_SESSION['titulo'] ?> </h2>
  <h4> <?php echo $_SESSION['resumo'] ?> </h4>
  <a id="link" target="" href="<?php echo $_SESSION['link']?>" class="inputSubmit"> Leia mais </a>
</section>
</body>

</html>