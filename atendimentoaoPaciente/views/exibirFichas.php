<?php
      require_once "../utils/funcoesUteis.php";
      require_once "includes/cabecalho.inc.php";
      
      $fichas = [];

      if(isset($_SESSION['fichas'])){
          $fichas = $_SESSION['fichas'];
      }
?>
<p>
<h1 class="text-center">Fichas</h1>
<p> 
<div class="table-responsive">
<table class="table table-light table-hover">
      <thead class="table-primary">
            <tr class="align-middle" style="text-align: center">
                <th>Nome</th>
                <th>CPF</th>
                <th>Motivo</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php
            foreach ($fichas as $item) {
               echo "<tr align='center'>";
               echo "<td>". $item->nome_paciente ."</td>";
               echo "<td>". $item->cpf_paciente ."</td>";
               echo "<td>". $item->motivo ."</td>";
               echo "<td>". $item->telefone ."</td>";
               echo "<td><a href='../controllers/controllerSala.php?opcao=1&id_ficha=". $item->id_ficha ."' class='btn btn-success btn-sm'>E</a> ";
               echo "<a href='../controllers/controllerEncaminhamento.php?opcao=2&id_ficha=". $item->id_ficha ."' class='btn btn-success btn-sm'>V</a> ";
               echo "<a href='../controllers/controllerFicha.php?opcao=3&id=". $item->id_ficha . "' class='btn btn-danger btn-sm'>X</a></td>";
               echo "</tr>";
            }
      ?>
      </tbody>  
</table>
</div>

<?php
       require_once 'includes/rodape.inc.php';
?>

