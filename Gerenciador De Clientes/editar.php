<?php include_once "config.php"; ?>
<?php include_once "top.php"; ?>
<?php
$id = $_GET['id'];
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn, "utf8");
$result_nomes = "SELECT * FROM tbclientes WHERE id ='$id' LIMIT 1 ";
$resultados_nomes = mysqli_query($conn, $result_nomes);
while ($linha = mysqli_fetch_array($resultados_nomes)) {
    $id = $linha['id'];
    $nome = $linha['nome'];
    $data = $linha['data'];
    $cpf = $linha['cpf'];
    $rg = $linha['rg'];
    $endereco = $linha['endereco'];
    $num = $linha['num'];
    $bairro = $linha['bairro'];
    $numcomp = $linha['numcomp'];
    $cep = $linha['cep'];
    $cidade = $linha['cidade'];
    $estado = $linha['estado'];
    $celular = $linha['celular'];
    $email = $linha['email'];
    $obs = $linha['obs'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador De Cliente</title>
</head>

<body>
<div class="container">
    <br>
    <form method="post" name="cliente" action="Att.php">

        <div class="form col-md-6">
            <label>Nome</label>
            <input class="form-control" type="text" name="nome" maxlength="150" value="<?php echo $nome; ?>">
            <input type="hidden" name="id" maxlength="150" value="<?php echo $id; ?>">
        </div>

        <div class="form col-md-2">
            <label>Data de Nascimento</label>
            <input class="form-control" type="date" maxlength="10" name="data" value="<?php echo $data; ?>">
        </div>

        <div class="form col-md-3">
            <label>CPF</label>
            <input class="form-control" type="text" name="cpf" maxlength="14" value="<?php echo $cpf; ?>">
        </div>
        <div class="form col-md-3">
            <label>RG</label>
            <input class="form-control" type="text" name="rg" maxlength="10" value="<?php echo $rg; ?>">
        </div>
        <div class="form col-md-3">
            <label>Endereço</label>
            <input class="form-control" type="text" name="endereco" maxlength="100" value="<?php echo $endereco; ?>">
        </div>
        <div class="form col-md-2">
            <label>Número</label>
            <input class="form-control" type="text" name="num" maxlength="5" value="<?php echo $num; ?>">
        </div>
        <div class="form col-md-4">
            <label>Bairro</label>
            <input class="form-control" type="text" name="bairro" maxlength="100" value="<?php echo $bairro; ?>">
        </div>
        <div class="form col-md-4">
            <label>Complemento</label>
            <input class="form-control" type="text" name="numcomp" maxlength="100" value="<?php echo $numcomp; ?>">
        </div>
        <div class="form col-md-3">
            <label>CEP</label>
            <input class="form-control" type="text" name="cep" maxlength="15" value="<?php echo $cep; ?>">
        </div>
        <div class="form col-md-2">
            <label>Cidade</label>
            <input class="form-control" type="text" name="cidade" maxlength="30" value="<?php echo $cidade; ?>">
        </div>
        <div class="form col-md-1">
            <label>Estado</label>
            <input class="form-control" type="text" name="estado" maxlength="50" value="<?php echo $estado; ?>">
        </div>
        <div class="form col-md-3">
            <label>Celular</label>
            <input class="form-control" type="text" name="celular" maxlength="15" value="<?php echo $celular; ?>">
        </div>
        <div class="form col-md-4">
            <label>E-mail</label>
            <input class="form-control" type="text" name="email" maxlength="50" value="<?php echo $email; ?>">
        </div>
        <div class="form col-md-4">
            <label>Observação</label>
            <input class="form-control" type="text" name="obs" maxlength="150" value="<?php echo $obs; ?>">
            <br>
        </div>
        <div class="form col-md-2">
            <input class="form-control" type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</div>
</body>

</html>