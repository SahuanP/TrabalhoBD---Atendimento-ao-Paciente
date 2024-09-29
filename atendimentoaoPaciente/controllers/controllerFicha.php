<?php
require_once "../dao/fichaDAO.inc.php";

$opcao = (int)$_REQUEST['opcao'];
$fichaDAO = new FichaDAO();
switch ($opcao) {
    case 1: // Cadastrar
        session_start();
        $motivo = $_REQUEST['motivo'];
        $cpf = $_REQUEST['cpf'];
        $data = date('Y-m-d');
        
        $fichaDAO->cadastrarFicha($cpf, $motivo, $data);


        header("Location: controllerFicha.php?opcao=2");
        break;
    
    case 2: // Read all
        $fichas = $fichaDAO->buscarTodos();
        session_start();

        $_SESSION['fichas'] = $fichas;

        header('Location: ../views/exibirFichas.php');
        break;
    
    case 3: // Finalizar
        $id = $_REQUEST['id'];
        $fichaDAO->finalizarFicha($id);

        header("Location: controllerFicha.php?opcao=2");
        break;
    
    default:
        # code...
        break;
}
?>