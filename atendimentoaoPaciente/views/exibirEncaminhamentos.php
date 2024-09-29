<?php
      require_once "../utils/funcoesUteis.php";
      require_once "includes/cabecalho.inc.php";
      
      $encaminhamentos = $_SESSION['encaminhamentos'];
?>
<p>
<h1 class="text-center">Encaminhamentos</h1>
<p> 
<div class="table-responsive">
<table class="table table-light table-hover">
      <thead class="table-primary">
            <tr class="align-middle" style="text-align: center">
                <th>Data Hora</th>
                <th>prioridade</th>
                <th>Sala</th>
            </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php
            foreach ($encaminhamentos as $item) {
               echo "<tr align='center'>";
               echo "<td>". parseBrasilDataHora(strtotime($item->data_hora)) ."</td>";
               echo "<td>". prioridade($item->prioridade) ."</td>";
               echo "<td>". $item->nome_sala ."</td>";
               echo "</tr>";
            }
      ?>
      </tbody>  
</table>
</div>

<?php
       require_once 'includes/rodape.inc.php';
?>

