<?php
require_once "../dao/encaminhamentoDAO.inc.php";

$opcao = (int)$_REQUEST['opcao'];
$encaminhamentoDAO = new EncaminhamentoDAO();

switch ($opcao) {
    case 1: // Cadastrar
        $id_ficha = $_REQUEST['id_ficha'];
        $id_sala = $_REQUEST['sala'];
        $prioridade = $_REQUEST['prioridade'];

        $encaminhamentoDAO->cadastrarEncaminhamento($id_ficha, $id_sala, $prioridade);
        
        header("Location: controllerFicha.php?opcao=2");
        break;
    case 2: // Listar
        $id_ficha = $_REQUEST['id_ficha'];
        $encaminhamentos = $encaminhamentoDAO->buscarTodosParaFicha($id_ficha);

        session_start();
        $_SESSION['encaminhamentos'] = $encaminhamentos;

        header("Location: ../views/exibirEncaminhamentos.php");
        break;

}