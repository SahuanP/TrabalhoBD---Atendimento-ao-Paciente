<?php
require_once '../dao/salaDAO.inc.php';

$opcao = (int)$_REQUEST['opcao'];
$salaDAO = new salaDAO();

switch ($opcao) {
    case 1:
        $salas = $salaDAO->obterTodas();

        $id_ficha = $_REQUEST['id_ficha'];

        session_start();

        $_SESSION['salas'] = $salas;

        header('Location: ../views/formEncaminhamento.php?id_ficha='.$id_ficha);
        break;
}
?>