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
          if(!isset($_POST['foto'])){

            $foto = $_FILES['foto'];
            $tipo = $foto['type'];
            $conteudo = file_get_contents($foto['tmp_name']);

            $sql = "INSERT INTO `usuario`(`nome`, `email`, `senha`,`foto`, `tipo`) values('$usuario', '$email', '$senha', '$conteudo', '$tipo')";
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
                    echo "Usuário cadastrado com sucesso";
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

    $sql = "SELECT * FROM `usuario` WHERE `email`";
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
              <td><?php echo $result['id'];?></td>
              <td><?php echo $result['nome'];?></td>
              <td><?php echo $result['email'];?></td>

            </tr><br>

         </table>
<?php
          }
					
  }
    
?>