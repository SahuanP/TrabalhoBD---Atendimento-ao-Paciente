<?php
require_once "../dao/pacienteDAO.inc.php";
$opcao = (int) $_REQUEST['opcao'];
$pacienteDAO = new PacienteDAO();

switch ($opcao) {
    case 1: //create
        $cpf = $_REQUEST['cpf'];
        $nome = $_REQUEST['nome'];
        $data_nascimento = $_REQUEST['data_nascimento'];
        $telefone = $_REQUEST['telefone'];

        $pacienteDAO->inserir($cpf, $nome, $data_nascimento, $telefone);

        header("Location: controllerPaciente.php?opcao=2");
        break;
    case 2: //read all
        session_start();

        $_SESSION['pacientes'] = $pacienteDAO->buscarTodos();

        header('Location: ../views/exibirPacientes.php');
        break;
    case 3: // read
        session_start();
        $cpf = $_REQUEST['cpf'];

        $_SESSION['paciente'] = $pacienteDAO->buscar($cpf);

        header('Location: ../views/formPacienteAtualizar.php');
        break;
    case 4: //update
        $cpf = $_REQUEST['cpf'];
        $nome = $_REQUEST['nome'];
        $data_nascimento = $_REQUEST['data_nascimento'];
        $telefone = $_REQUEST['telefone'];

        $pacienteDAO->atualizar($cpf, $nome, $data_nascimento, $telefone);

        header("Location: controllerPaciente.php?opcao=3&cpf=$cpf");
        break;
    case 5: //delete
        $cpf = $_REQUEST['cpf'];

        $pacienteDAO->excluir($cpf);

        header("Location: controllerPaciente.php?opcao=2");
        break;
}

?>