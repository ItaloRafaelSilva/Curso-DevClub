<?php include_once "config.php" ?>

<div style="text-align: center;">
   // <form class="navbar-form navbar-center" method="get" action="Buscar.php" autocomplete="off">
        <div class="input-group">
            <input type="text" class="form-control" name="busca" required autocomplete="off">
            <div class="input-group">
                <input type="submit" name="" value="Pesquisa">
            </div>
        </div>
   </form>
</div>

<?php

$busca = $_GET['busca'];

$result_nomes = "SELECT * FROM tbclientes WHERE nome LIKE '%$busca%' or cpf = '$busca'";
$resultado = mysqli_query($conn, $result_nomes);

while ($linha = mysqli_fetch_array($resultado)) {
    echo    $nome = $linha['nome'];
    echo '<a href=deletar.php?id=' . $linha['id'] . '>Deletar</a> | <a href=editar.php?id=' . $linha['id'] . '>Editar</a>';
    echo '<br>';
}

?>