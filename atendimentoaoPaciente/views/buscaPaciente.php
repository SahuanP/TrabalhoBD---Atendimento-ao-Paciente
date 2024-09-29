<?php
require_once "includes/cabecalho.inc.php";
?>

<h1 class="text-center">Busca Paciente</h1>
<p>
<div class="table-responsive">
    <table class="table table-ligth table-striped">
        <thead class="table-danger">
            <tr class="align-middle" style="text-align: center">
                <th witdh="10%">Contagem</th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Telefone</th>
                <th>Exibir ficha</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            $contador = 0;
            // $soma = 0;
            // foreach ($carrinho as $item) {
            //     $contador++;
            //     $soma += $item->getValorItem();
            ?>
                <!-- <tr class="align-middle" style="text-align: center">
                    <td><?= $contador ?></td>
                    <td><?= $item->getProduto()->getProdutoId() ?></td>
                    <td><?= $item->getProduto()->getNome() ?></td>
                    <td><?= $item->getProduto()->getNomeFabricante() ?></td>
                    <td>R$ <?= number_format($item->getProduto()->getPreco(), 2, ',', '.') ?></td>
                    <td><?= $item->getQtd() ?></td>
                    <td>R$ <?= number_format($item->getValorItem(), 2, ',', '.') ?></td>
                    <td><a href="../controlers/controllerCarrinho.php?opcao=2&index=<?= $contador - 1 ?>" class='btn btn-danger btn-sm'>X</a></td>
                </tr> -->
            <?php
            // }
            ?>

            <tr align="right">
                <td colspan="8">
                    <font face="Verdana" size="4" color="red"><b>Valor Total = R$ <?= number_format($soma, 2, ',', '.') ?></b></font>
                </td>
            </tr>
    </table>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <a class="btn btn-warning" role="button" href="../controlers/controllerProduto.php?opcao=6"><b>Continuar comprando</b></a>
            </div>
            <div class="col">
                <a class="btn btn-danger" role="button" href="../controlers/controllerCarrinho.php?opcao=3"><b>Esvaziar carrinho</b></a>
            </div>
            <div class="col">
                <a class="btn btn-success" role="button" href="../controlers/controllerCarrinho.php?opcao=5"><b>Finalizar compra</b></a>
            </div>
        </div>
    </div>

<?php
    require_once 'includes/rodape.inc.php';
?>