<?php
require_once 'conexao.inc.php';

final class salaDAO
{
    private $con;

    public function __construct()
    {
        $this->con = (new Conexao())->getConexao();
    }

    public function obterTodas()
    {
        $sql = $this->con->prepare("SELECT * FROM sala");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }
}


?>