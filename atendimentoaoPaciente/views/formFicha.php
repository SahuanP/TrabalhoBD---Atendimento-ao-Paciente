<?php require_once "includes/cabecalho.inc.php";

$cpf = "";
if($_REQUEST['cpf']){
    $cpf = $_REQUEST['cpf'];
}
?>

<!-- CONTEUDO -->
<h1 class="text-center">Cadastro de Ficha</h1>

<div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
        </div>
        <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Entre com as informações da ficha</h5>
            <form action="../controllers/controllerFicha.php" method="get">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputcpf" name="motivo">
                    <label for="floatingInputcpf">Motivo</label>
                </div>

                <hr>

                <div class="d-grid mb-2">
                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Cadastrar</button>
                </div>

                <input type="hidden" value="<?php echo $cpf ?>" name="cpf">
                <input type="hidden" value="1" name="opcao">
            </form>
        </div>
    </div>
</div>

<!-- Rodape -->

<?php require_once "includes/rodape.inc.php" ?>