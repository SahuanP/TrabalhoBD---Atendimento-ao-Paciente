<?php
require_once 'conexao.inc.php';
final class EncaminhamentoDAO
{
    private $con;

    public function __construct()
    {
        $this->con = (new Conexao())->getConexao();
    }

    public function cadastrarEncaminhamento(int $id_ficha, int $id_sala, int $prioridade)
    {
        $sql = $this->con->prepare("INSERT INTO encaminhamento (id_ficha, id_sala, prioridade, data_hora) VALUES (:id_ficha, :id_sala, :prioridade, NOW())");
        $sql->bindValue(':id_ficha', $id_ficha);
        $sql->bindValue(':id_sala', $id_sala);
        $sql->bindValue(':prioridade', $prioridade);
        $sql->execute();
    }

    public function buscarTodosParaFicha(int $id_ficha) : array
    {
        $sql = $this->con->prepare("SELECT * FROM encaminhamento e INNER JOIN sala s ON s.id_sala = e.id_sala WHERE id_ficha = :id_ficha");
        $sql->bindValue(':id_ficha', $id_ficha);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }
    
}

?>