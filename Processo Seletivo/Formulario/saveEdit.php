<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $num = $_POST['num'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',cpf='$cpf',rg='$rg',email='$email',telefone='$telefone',data='$data_nascimento',cep='$cep',cidade='$cidade',estado='$estado',endereco='$endereco',bairro='$bairro',num='$num'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    
    if (mysqli_query($conexao, $sqlInsert)){
        echo "<script>alert('Cadastro atualizado com sucesso!');window.location='sistema.php?id=$id';</script>";
      } else{
         echo "Deu erro" . $sqlInsert . "<br>" . mysqli_error($conexao);
      }
     mysqli_close($conexao);
    }


?>