<?php
if (isset($_SESSION['usuario_id'])) {
    $usuario_id = $_SESSION['usuario_id'];
}

if (isset($_POST['excluir'])) {
    $indice = $_POST['indice'];
    if (isset($_SESSION['carrinho'][$indice])) {
        unset($_SESSION['carrinho'][$indice]);
        $_SESSION['carrinho'] = array_values($_SESSION['carrinho']); // Reindexar o array
    }
}

$produtosNoCarrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : [];
$contadorRegistros = count($produtosNoCarrinho); // Contador de registros no carrinho
?>
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
            <a href="ofertasDoDia.php" class="nav-item nav-link"><i class="mdi mdi-currency-usd"></i> Ofertas do Dia</a>
            <?php
            if (isset($_SESSION['nome_usuario'])) {
                echo '<span class="nav-item nav-link">Bem-vindo, ' . $_SESSION['nome_usuario'] . '</span>';
                if ($_SESSION['papel'] == 'administrador') {
                    echo '<a href="dashboard/index.php" class="nav-item nav-link"><i class="mdi mdi-wrench-outline"></i> Painel de Controle</a>';
                }
                echo '<a href="Sair.php" class="nav-item nav-link"><i class="mdi mdi-exit-run"></i> Sair</a>';
                
      
                echo '<div id="cart-icon-container">';
                echo '<a href="carrinho.php"><i class="fa fa-shopping-cart"></i></a>';
                echo $contadorRegistros;
                echo '</div>';
            } else {
       
                echo '<a href="cadastro.php" class="nav-item nav-link"><i class="mdi mdi-smart-card-outline"></i> Cadastro</a>';
                echo '<a href="login.php" class="nav-item nav-link"><i class="mdi mdi-login"></i> Login</a>';
            }
            ?>
        </div>
    </div>
</nav>
