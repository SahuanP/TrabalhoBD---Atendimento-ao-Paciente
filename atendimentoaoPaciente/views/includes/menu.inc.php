<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
  <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
    <img style="max-height: 70px;" src="imagens/logo2.png">&nbsp;&nbsp;
  </a>

  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

    <li><a href="../controllers/controllerFicha.php?opcao=2" class="nav-link px-2 link-secondary">Fichas</a></li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle link-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Pacientes
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="formPaciente.php">Cadastrar</a></li>
        <li><a class="dropdown-item" href="../controllers/controllerPaciente.php?opcao=2">Visualizar</a></li>
      </ul>
    </li>
  </ul>

  <div class="col-md-3 text-end">
  </div>
</header>