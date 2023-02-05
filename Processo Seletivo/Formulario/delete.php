<?php

include_once 'config.php';

$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $mysqli->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Cadastro deletado com sucesso!');window.location = 'sistema.php';</script>";
    } else {
        echo "Ocorreu um erro ao deletar o cadastro.";
    }
}

?>