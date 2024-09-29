<?php
      require_once "../utils/funcoesUteis.php";
      require_once "includes/cabecalho.inc.php";
      
      $pacientes = [];

      if(isset($_SESSION['pacientes'])){
          $pacientes = $_SESSION['pacientes'];
      }
?>
<p>
<h1 class="text-center">Pacientes</h1>
<p> 
<div class="table-responsive">
<table class="table table-light table-hover">
      <thead class="table-primary">
            <tr class="align-middle" style="text-align: center">
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nascimento</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php
            foreach ($pacientes as $item) {
               echo "<tr align='center'>";
               echo "<td>". $item->nome_paciente ."</td>";
               echo "<td>". $item->cpf_paciente ."</td>";
               echo "<td>". formatarData(strtotime($item->data_nascimento)) ."</td>";
               echo "<td>". $item->telefone ."</td>";
               echo "<td><a href='formFicha.php?cpf=". $item->cpf_paciente."' class='btn btn-success btn-sm'>F</a> ";
               echo "<a href='../controllers/controllerPaciente.php?opcao=3&cpf=".$item->cpf_paciente."' class='btn btn-success btn-sm'>A</a> ";
               echo "<a href='../controllers/controllerPaciente.php?opcao=5&cpf=".$item->cpf_paciente."' class='btn btn-danger btn-sm'>X</a></td>";
               echo "</tr>";
            }
      ?>
      </tbody>  
</table>
</div>

<?php
       require_once 'includes/rodape.inc.php';
?>

