<!DOCTYPE html>
<html>
<head>
<title> Adicionar Artigo </title>
</head>
<body>

<h3> Adicione as informações para o artigo: </h3>
<form method="POST" >
<label for="titulo"> Título: </label>
    <input type= "text" id="titulo" name="titulo">
    <br> <br>
    <label for= "link"> Link: </label>
    <input type= "text" id="link" name="link">
    <br> <br>
    <label for="foto"> Foto: </label>
    <input type="file" id="foto" name="foto">
    <br> <br>
    <label for="resumo"> Resumo: </label>
    <br>
    <textarea type="text" id="resumo" name="resumo" rows="20" cols="40"> </textarea>
    <br>
    <input id="adicionar" name="adicionar"  type="submit" class="inputSubmit" value="Adicionar" style="position: absolute; left: 164px; top: 350px;">
</form>

</body>
</html>

<?php
 include_once('conexao.php');
 $bancoDados = new db();
 $link = $bancoDados-> conecta_mysql();
   

    if (isset($_POST['adicionar'])) {
    $title = $_POST['titulo'];
    $link = $_POST['link'];
    //$foto = $_FILES['foto']['tmp_name']; //pega a foto e o tipo
    $textinho = $_POST['resumo'];
   /*
    $tamanhopermitido = 1024000; //1 MB
    $pasta = 'img'; //pasta onde vai guardar a foto
   
    if(!empty($foto)) {
    $file = getimagesize($foto);
       
    //testa o tamanho do arquivo
    if($_FILES['foto']['size'] > $tamanhopermitido) {
    echo "Arquivo muito grande";
    }
   
    //testa a extensão do arquivo
    if(!preg_match('/^foto\/(?:gif|jpg|jpeg|png)\i', $file['mime'])) {
        echo "Extensão não permitida";
        }
       
        //pega a extensão do arquivo
        $extensao = str_ireplace("/", "", strchr($file['mime'], "/"));
       
        //monta o caminho para od estino da imagenzinha
        $destine = "{$pasta}/foto_artigo".uniqid('', true) . '.' . $extensao;
        move_upload_file($foto, $destine);
    }
   */
    $sql = "INSERT INTO `artigo`(`titulo`, `link`, `resumo`) values('$title', '$link', '$textinho');";
    $statement = $link->prepare($sql);
    if($statement->execute()) {
      echo "Artigo cadastrado com sucesso";
    } else {
      echo "Erro";
    }
    }
?>
