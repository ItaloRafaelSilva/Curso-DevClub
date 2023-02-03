<?php
include_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar novo endereço</title>
</head>

<body>
<h2>Cadastrar novo endereço</h2>



<?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (!empty($dados['SendCadEnd'])) {
    var_dump($dados);

    "INSERT INTO enderecos (cep,cidade,estado,endereco,bairro,num,usuario_id) VALUES()"

}
?>


<form method="POST" action="">
    <label>Logradouro:</label>
    <input type="text" name="logradouro" placeholder="Rua" required><br><br>

    <label>Número:</label>
    <input type="text" name="numero" placeholder="Número" required><br><br>
    <input type="submit" value="Cadastrar" name="SendCadEnd">
</form>
</body>

</html>