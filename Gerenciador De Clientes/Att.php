<?php include_once "config.php" ?>
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$endereco = $_POST['endereco'];
$num = $_POST['num'];
$bairro = $_POST['bairro'];
$numcomp = $_POST['numcomp'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$obs = $_POST['obs'];

$sql  = "UPDATE tbclientes SET nome='$nome',data='$data',cpf='$cpf',rg='$rg',endereco='$endereco',num='$num',bairro='$bairro',
numcomp='$numcomp',cep='$cep',cidade='$cidade',estado='$estado',celular='$celular',email='$email',obs='$obs' WHERE id='$id'";

 if (mysqli_query($conn, $sql)){
   echo "<script>alert('Cadastro atualizado com sucesso!');window.location='editar.php?id=$id';</script>";
    //header("location: editar.php?id=$id");
 } else{
    echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
 }
mysqli_close($conn);
?>