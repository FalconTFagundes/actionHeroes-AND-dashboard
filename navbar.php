

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-2">
      <a href="index.php" class="navbar-brand d-flex align-items-center border-end me-2">
          <h2 class="m-0"><img src="img/logotipo/logoActionHeroesSemFundo.png"></h2>

      </a>

      <form class="d-flex">
          <input class="form-control me-2" type="search" style="width: 300px;" placeholder="Pesquisa" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><i class="mdi mdi-account-search"></i></button>
      </form>

      <button type="button" class="navbar-toggler me-5" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mx-3" id="navbarCollapse">
          <div class="navbar-nav ms-auto p-4 p-lg-0">
              <a href="index.php" class="nav-item nav-link active"><i class="mdi mdi-home-outline"></i> Início</a>
              <a href="ofertasDoDia.php" class="nav-item nav-link"><i class="mdi mdi-octagram-outline"></i> Ofertas do Dia</a>
              <a href="cadastro.php" class="nav-item nav-link"><i class="mdi mdi-smart-card-outline"></i> Cadastro</a>
              <?php
                // Verifique se o nome do usuário está definido na sessão
                if (isset($_SESSION['nome_usuario'])) {
                    echo '<span class="nav-item nav-link">Bem-vindo, ' . $_SESSION['nome_usuario'] . '</span>';
                    if ($_SESSION['papel'] == 'administrador') {
                        echo '<a href="dashboard/index.php" class="nav-item nav-link">Painel de Controle</a>';
                    }
                    echo '<a href="Sair.php" class="nav-item nav-link"><i class="mdi mdi-exit-run"></i> Sair</a>'; // Link de logout
                } else {
                    echo '<a href="login.php" class="nav-item nav-link"><i class="mdi mdi-login"></i> Login</a>';
                }
                ?>
          </div>
      </div>
  </nav>