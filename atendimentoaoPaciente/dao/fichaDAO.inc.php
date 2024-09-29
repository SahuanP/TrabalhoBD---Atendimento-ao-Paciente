<?php
require_once "conexao.inc.php";

// CREATE TABLE IF NOT EXISTS ficha
// (
//     id_ficha serial PRIMARY KEY,
//     cpf_paciente varchar(11) NOT NULL,
//     motivo text,
//     status boolean,
//     data_hora timestamp without time zone,
//     CONSTRAINT fk_paciente
//     FOREIGN KEY(cpf_paciente)
//     REFERENCES paciente(cpf_paciente)
// );

final class fichaDAO
{
    private $con;

    public function __construct()
    {
        $this->con = (new Conexao())->getConexao();
    }

    public function cadastrarFicha(string $cpf, string $motivo, string $data)
    {
        $sql = $this->con->prepare("INSERT INTO ficha (cpf_paciente, motivo, data_hora, status) VALUES (:cpf, :motivo, :data, false)");
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':motivo', $motivo);
        $sql->bindValue(':data', $data);
        $sql->execute();
    }

    public function buscarTodos() : array
    {
        $sql = $this->con->prepare(
            "SELECT * FROM ficha f INNER JOIN paciente p ON f.cpf_paciente = p.cpf_paciente WHERE status = false"
        );
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function finalizarFicha(int $id)
    {
        $sql = $this->con->prepare("UPDATE ficha SET status = true WHERE id_ficha = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
}

?>