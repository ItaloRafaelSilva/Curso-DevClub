<?php  
//conexão com o BD
include_once "config.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar novo Endereço</title>
</head>

<body>
<h2>Cadastrar novo Endereço</h2>

<?php 

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Envio dos dados ao BD
if(!empty($dados['SendCadEnd'])){
    //var_dump($dados);
    //QUERY cadastrar no Banco
    $query_endereco = "INSERT INTO endereco(cep, cidade, estado, logradouro, bairro, num, usuario_id) 
    VALUES(?, ?, ?, ?, ?, ?, ?)";
    $cad_endereco = $conexao->prepare($query_endereco);
    $cadastrou = $cad_endereco->execute(array(
        $dados['cep'],
        $dados['cidade'],
        $dados['estado'],
        $dados['logradouro'],
        $dados['bairro'],
        $dados['num'],
        $dados['usuario_id']));

        //var_dump($id);

    if($cadastrou) {
        echo "<p>Endereço cadastrado com sucesso.</p>";
    }else{
        echo "<p>Erro ao cadastrar endereço.</p>";
    }
}

?>


<form method="POST" action="">
<label>CEP:</label>
<input type="text" name="cep" placeholder="cep" required><br><br>

<label>cidade:</label>
<input type="text" name="cidade" placeholder="cidade required"> <br><br>

<label>Estado:</label>
<input type="text" name="estado" placeholder="Estado" required><br><br>

<label>Endereço:</label>
<input type="text" name="logradouro" placeholder="Endereço" required><br><br>

<label>bairro:</label>
<input type="text" name="bairro" placeholder="Rua, Avenida" required><br><br>

<label>Número:</label>
<input type="text" name="num" placeholder="número" required><br><br>

<input type="hidden" name="usuario_id" value="1">
<input type="submit" name="SendCadEnd" value="Cadastrar">

</form>
</body>

</html>