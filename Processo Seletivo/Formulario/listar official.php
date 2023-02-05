<?php
session_start();

include_once "config.php";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT *
    FROM usuarios u
    LEFT JOIN endereco e ON e.usuario_id = u.id
    WHERE u.id = $id";
    $detalhe = $conexao->query($sqlSelect);
    if ($detalhe->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($detalhe)) {

            $nome = $user_data['nome'];
            $senha = $user_data['senha'];
            $email = $user_data['email'];
            $cpf = $user_data['cpf'];
            $rg = $user_data['rg'];
            $telefone = $user_data['telefone'];
            $data_nascimento = $user_data['data'];
            $cep = $user_data['cep'];
            $estado = $user_data['estado'];
            $cidade = $user_data['cidade'];
            $logradouro = $user_data['logradouro'];
            $bairro = $user_data['bairro'];
            $num = $user_data['num'];
        }
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/listar.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.mask.min.js"></script>
    <script src="assets/js/javascript.js"></script>
    <title>Atualização</title>
    <script>
        $("#cpf").mask("000.000.000-00");
        $("#telefone").mask("(00) 00000-0000");
        $("#rg").mask("00.000.000");
        $("#data").mask("00/00/0000");
        $("#cep").mask("00000-000")
    </script>
    <title>Visualizar</title>
</head>

<body>
    <a href="sistema.php"><button id="button-voltar">Voltar</button></a>
    
    <div class="box">
        <form action="" method="get">
        <fieldset>
                <legend><b>Detalhes Do Usuario</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome; ?>" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" value="<?php echo $email; ?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha; ?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf; ?>" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="rg" id="rg" class="inputUser" value="<?php echo $rg; ?>" required>
                    <label for="rg" class="labelInput">RG</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input class="inputUser" type="text" name="telefone" id="telefone" value="<?php echo $telefone; ?>">
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="data" id="data" class="inputUser" value="<?php echo $data_nascimento; ?>" required>
                    <label for="data" class="labelInput">Data de Nascimento:</label>
                </div>
                <br><br>
            </fieldset>
        </form>
    </div>

    <div class="box">
        <form action="" method="get">
            <fieldset>
                <legend><b>Detalhes Do Endereco</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser" onblur="pesquisacep(this.value);"  
                    value="<?php echo $cep; ?>" required>
                    <label for="cep" class="labelInput">CEP:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input class="inputUser" type="text" name="cidade" id="cidade" value="<?php echo $cidade; ?>">
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado; ?>">
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input class="inputUser" type="text" name="logradouro" id="logradouro" value="<?php echo $logradouro; ?>">
                    <label for="logradouro" class="labelInput">Rua:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input class="inputUser" type="text" name="bairro" id="bairro" value="<?php echo $bairro; ?>">
                    <label for="bairro" class="labelInput">Bairro:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="num" id="num" maxlength="5" class="inputUser" value="<?php echo $num; ?>">
                    <label for="num" class="labelInput">Número</label>
                </div>
                <br><br>
            </fieldset>
        </form>
    </div>
</body>

</html>