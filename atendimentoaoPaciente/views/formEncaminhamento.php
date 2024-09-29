<?php require_once "includes/cabecalho.inc.php";

$id_ficha = $_REQUEST['id_ficha'];

$salas = $_SESSION['salas'];
?>

<!-- CONTEUDO -->
<h1 class="text-center">Cadastro de Encaminhamento</h1>

<div class="row">
    <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
        </div>
        <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Entre com as informações do encaminhamento</h5>
            <form action="../controllers/controllerEncaminhamento.php" method="get">
                <input type="hidden" name="id_ficha" value="<?php echo $id_ficha ?>">
                <div class="mb-3">
                    <label for="sala" class="form-label">Sala</label>
                    <select name="sala" class="form-select">
                        <option selected value="0" disabled>Escolha...</option>
                        <?php
                        foreach ($salas as $f) {
                            echo "<option value='$f->id_sala'>$f->nome_sala</option>";
                        }
                        ?>

                    </select>
                </div>

                <hr>

                <div class="mb-3">
                    <label for="prioridade" class="form-label">Prioridade</label>
                    <select name="prioridade" class="form-select">
                        <option selected value="0" disabled>Escolha...</option>
                        <option value="1">Baixa</option>
                        <option value="2">Média</option>
                        <option value="3">Alta</option>
                    </select>
                </div>



                <div class="d-grid mb-2">
                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Cadastrar</button>
                </div>

                <input type="hidden" value="1" name="opcao">
            </form>
        </div>
    </div>
</div>

<!-- Rodape -->

<?php require_once "includes/rodape.inc.php" ?>