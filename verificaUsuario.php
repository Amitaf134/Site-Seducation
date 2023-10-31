<?php

  include_once('conexao.php');
  $bancoDados = new db();
  $link = $bancoDados-> conecta_mysql();

  if (isset($_POST['cadastrar'])) {
  //aq ele ta verificando se os dados foram enviados, so q o problema é q nao estao mas ele nao da erro nenhum e o tabela ta vazia
    
    $usuario = $_POST['nomeUser'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmSenha = $_POST['confirmSenha'];
    
        if($senha == $confirmSenha){
          if(isset($_FILES['pic'])){
            $conteudo = $_FILES['pic'];

            if($conteudo['error'])
              die("Falha ao enviar arquivo");

              if($conteudo['size']>2097152)
                  die ("Arquivo muito grande!! MAX: 2MB");

              $pasta = "img/";
              $nomeArquivo = $conteudo['name'];//pegando o nome da imagem
              $novoNomeArquivo = uniqid();//dando um nome unico para ela
              $extensaoArquivo = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));//pegando a extensao e transformando em minuscula
            
              if($extensaoArquivo != "jpg" && $extensaoArquivo != "png")
                  die("Tipo de arquivo não aceito.");

              $deuCerto = move_uploaded_file($conteudo['tmp_name'], $pasta . $novoNomeArquivo .".". $extensaoArquivo);//passando para a pasta img, por enquanto
            $foto = file_get_contents($conteudo['tmp_name']);
            $tipo = $conteudo['type'];
            
            $sql = "INSERT INTO `usuario`(`nome`, `email`, `senha`,`foto`, `tipo`) VALUES('$usuario', '$email', '$senha', '$conteudo', '$tipo')";
                $statement = $link->prepare($sql);
                  if ($statement->execute()) {
                    echo "Usuário cadastrado com sucesso";
                    //header('Location: index.php');
                  } else {
                    echo "Erro";
                  }
           }else{	
            $sql = "INSERT INTO `usuario`(`nome`, `email`, `senha`) values('$usuario', '$email', '$senha')";
            $statement = $link->prepare($sql);
                  if ($statement->execute()) {
                    echo "ta vindo pra cá";
                    header('Location: index.php');
                  } else {
                    echo "Erro";
                  }
                }
        }else{
            echo "Senhas não condizem";
       }
    

    
} else if(isset($_POST['logar'])) {
    $emailL = $_POST['lemail'];
    $senhaL = $_POST['lenha'];

    $sql = "SELECT * FROM usuario";
    //$resultado = mysqli_query($link, $sql);
    
    /*
    $resultado = mysqli_query($link, $sql);
   if(mysqli_num_rows($resultado)> 0){
     $_SESSION['email'] = $emailL;
     $_SESSION['senha'] = $senhaL;
     $sql = 'SELECT codigo, nome, cargo, salario FROM Funcionario';
     */
    ?>
    <table>
         <tr>
          <td>ID</td>
          <td>NOME</td>
          <td>EMAIL</tr>
         </tr>
         <?php
					$statement = $link->prepare($sql);
					$statement->execute();
	        while($result = $statement->fetch(PDO::FETCH_ASSOC)) {
	      	$sl = (object) $result;
	        
          $_SECTION['nomeUser'] = $result['nome'];
          
        //  header('Location: telaPrincipal.php');
?>
            <tr>
            <td><?php  $tipo = $result['tipo']; ?></td>
              <td><?php echo $result['nome'];?></td>
              <td><?php echo $result['email'];?></td>
              <?php header("Content-Type: $tipo");?>
              <td><img src="<?php echo $result['foto']; ?>" width="50px" heigth="50px"/></td>
            </tr><br>

         </table>
<?php
          }
					
  }
    
?>