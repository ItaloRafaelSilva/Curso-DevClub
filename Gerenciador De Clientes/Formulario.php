<?php include_once "top.php"; ?>
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
        <form method="post" name="cliente" action="Visualização.php">
            <div class="form col-md-6">
                <label>Nome</label>
                <input class="form-control" type="text" name="nome" maxlength="150" required>
            </div>

            <div class="form col-md-2">
                <label>Data de Nascimento</label>
                <input class="form-control" type="text" maxlength="10" id="data" name="data" placeholder="00/00/0000">
            </div>
            <div class="form col-md-3">
                <label>CPF</label>
                <input class="form-control" type="text" id="cpf" name="cpf" maxlength="14" required placeholder="000.000.000-00">
            </div>
            <div class="form col-md-3">
                <label>RG</label>
                <input class="form-control" type="text" id="rg" name="rg" maxlength="10" required placeholder="00.000.000">
            </div>
            <div class="form col-md-3">
                <label>Endereço</label>
                <input class="form-control" type="text" name="endereco" maxlength="100">
            </div>
            <div class="form col-md-2">
                <label>Número</label>
                <input class="form-control" type="text" name="num" maxlength="5">
            </div>
            <div class="form col-md-4">
                <label>Bairro</label>
                <input class="form-control" type="text" name="bairro" maxlength="100">
            </div>
            <div class="form col-md-4">
                <label>Complemento</label>
                <input class="form-control" type="text" name="numcomp" maxlength="100">
            </div>
            <div class="form col-md-3">
                <label>CEP</label>
                <input class="form-control" type="text" name="cep" maxlength="15">
            </div>
            <div class="form col-md-2">
                <label>Cidade</label>
                <input class="form-control" type="text" name="cidade" maxlength="30">
            </div>
            <div class="form col-md-1">
                <label>Estado</label>
                <input class="form-control" type="text" name="estado" maxlength="50">
            </div>
            <div class="form col-md-3">
                <label>Celular</label>
                <input class="form-control" type="text" id="celular" name="celular" maxlength="15" required placeholder="(00) 00000-0000">
            </div>
            <div class="form col-md-4">
                <label>E-mail</label>
                <input class="form-control" type="text" name="email" maxlength="50" placeholder="exemplo@exemplo.com.br">
            </div>
            <div class="form col-md-4">
                <label>Observação</label>
                <input class="form-control" type="text" name="obs" maxlength="150">
                <br>
            </div>
            <div class="form col-md-2">
            <input class="form-control" type="submit" name="enviar" value="Enviar">
            </div>
        </form>
    </div>
</body>

<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'Formulario.php?search='+search.value;
    }
</script>
</html>