<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    if (mysqli_query($conexao,$sqlDelete)){
        echo "<script>alert('Cadastro deletador com sucesso!');window.location = 'sistema.php';</script>";
    }else{
        echo 'Deu Erro';
    }
   
?>