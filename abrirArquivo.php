<?php
include_once('conexao.php');

$bancoDados = new db();
$link = $bancoDados-> conecta_mysql();

$id = (int) filter_input(INPUT_GET, 'id');;
echo $id;
	$statement = $link->prepare("SELECT `foto`,`tipo`, `caminho` FROM usuario WHERE `id`='$id'");
	$statement->execute();

	if($resultado = $statement->fetch(PDO::FETCH_ASSOC)) {	
			$foto = $resultado['foto'];
			if($foto!= NULL){
				$tipo = $resultado['tipo'];		
				header("Content-Type: $tipo");
				echo $foto;
			}else{			
                echo $result['caminho'];
			}
	}

?>