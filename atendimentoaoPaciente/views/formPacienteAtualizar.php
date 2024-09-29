<?php 
require_once "../utils/funcoesUteis.php";
require_once "includes/cabecalho.inc.php";

$paciente = null;

if(isset($_SESSION['paciente'])){
    $paciente = $_SESSION['paciente'];
}

?>

<!-- CONTEUDO -->
<h1 class="text-center">Atualiza Paciente</h1>

<div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
        </div>
        <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Informações do paciente</h5>
            <form action="../controllers/controllerPaciente.php" method="get">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputcpf" value="<?= $paciente->cpf_paciente?>" disabled 
                    name="cpf" maxlength="11" minlength="11">
                    <label for="floatingInputcpf">CPF</label>
                </div>

                <hr>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingnome" name="nome" value="<?= $paciente->nome_paciente ?>">
                    <label for="floatingnome">Nome</label>
                </div>

                <hr>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingDataNascimento" 
                    value="<?= parseISO(strtotime($paciente->data_nascimento)) ?>" name="data_nascimento">
                    <label for="floatingDataNascimento">Data Nascimento</label>
                </div>

                <hr>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingtelefone" name="telefone" value="<?= $paciente->telefone ?>" >
                    <label for="floatingtelefone">Telefone</label>
                </div>

                <div class="d-grid mb-2">
                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Atualizar</button>
                </div>

                <input type="hidden" value="4" name="opcao">
            </form>
        </div>
    </div>
</div>

<!-- Rodape -->

<?php require_once "includes/rodape.inc.php" ?>