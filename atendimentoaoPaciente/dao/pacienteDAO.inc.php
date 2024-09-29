<?php
require_once "conexao.inc.php";

final class pacienteDAO
{
    private $con;

    public function __construct()
    {
        $this->con = (new Conexao())->getConexao();
    }

    public function inserir(string $cpf, string $nome, string $data_nascimento, string $telefone)
    {
        $sql = $this->con->prepare("INSERT INTO paciente (cpf_paciente, nome_paciente, data_nascimento, telefone) VALUES (:cpf, :nome, :data_nascimento, :telefone)");
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':data_nascimento', $data_nascimento);
        $sql->bindValue(':telefone', $telefone);
        $sql->execute();
    }

    public function buscarTodos() : array
    {
        $sql = $this->con->prepare("SELECT * FROM paciente");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function buscar(string $cpf) : object
    {
        $sql = $this->con->prepare("SELECT * FROM paciente WHERE cpf_paciente = :cpf");
        $sql->bindValue(':cpf', $cpf);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function atualizar(string $cpf, string $nome, string $data_nascimento, string $telefone)
    {
        $sql = $this->con->prepare("UPDATE paciente SET nome_paciente = :nome, data_nascimento = :data_nascimento, telefone = :telefone WHERE cpf_paciente = :cpf");
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':data_nascimento', $data_nascimento);
        $sql->bindValue(':telefone', $telefone);
        $sql->execute();
    }

    public function excluir(string $cpf)
    {
        $sql = $this->con->prepare("DELETE FROM paciente WHERE cpf_paciente = :cpf");
        $sql->bindValue(':cpf', $cpf);
        $sql->execute();
    }


}


?>