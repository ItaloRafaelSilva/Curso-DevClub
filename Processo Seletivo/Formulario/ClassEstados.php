<?php include_once ('config.php');

class ClassEstados
{

    public function getEstados()
    {
        $estados = $this->conectaDB()->prepare('select * from estados');
        $estados->execute();
        return $fEstados = $estados->fetchAll(\PDO::FETCH_OBJ);
    }

}

?>

