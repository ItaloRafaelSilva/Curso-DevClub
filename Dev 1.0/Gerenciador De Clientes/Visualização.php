<?php include_once "config.php" ?>
<?php
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

$sql  = "INSERT INTO tbclientes(nome,data,cpf,rg,endereco,num,bairro,numcomp,cep,cidade,estado,celular,email,obs)Values
 ('$nome','$data','$cpf','$rg','$endereco','$num','$bairro','$numcomp','$cep','$cidade','$estado','$celular','$email','$obs')";

 if (mysqli_query($conn, $sql)){
    header("location: Formulario.php");
 } else{
    echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);
 }
mysqli_close($conn);
?>