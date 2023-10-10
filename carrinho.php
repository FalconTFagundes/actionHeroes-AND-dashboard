<?php
session_start(); // Inicie a sessão se ainda não estiver iniciada

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

<?php
// Inicialize a variável para o valor total
$valorTotal = 0;

// Verifique se o carrinho não está vazio
if (!empty($produtosNoCarrinho)) {
    foreach ($produtosNoCarrinho as $produto) {
        // Acesse o preço de cada produto e some ao valor total
        $valorTotal += $produto['preco'];
    }
}
?>

<?php include_once 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <title>Action Heroes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/cards3d.css">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <!-- carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Carrinho de Compras</title>
</head>

<body>
    <br><br>

    <?php


if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] === true) {

} else {
    header('Location: login.php');
    exit;
}
?>

    <h1 class="text-center">Carrinho de Compras</h1>

    <?php if (!empty($produtosNoCarrinho)) : ?>
        <br>
        <table class="table table-bordered w-75 mx-auto border-dark">
            <tr class="bg-warning">
                <th>Nome do Produto</th>
                <th>Preço do Produto</th>
                <th>Ação</th>
            </tr>
            <?php foreach ($produtosNoCarrinho as $indice => $produto) : ?>
                <tr>
                    <td><?php echo $produto['nome']; ?></td>
                    <td><?php echo $produto['preco']; ?></td>
                    <td class="text-center">
                        <form method="POST">
                            <input type="hidden" name="indice" value="<?php echo $indice; ?>">
                            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr class="bg-dark text-white">
                <th>Quantidade de itens</th>
                <th>Valor total</th>
                <th>Ação</th>
            </tr>
            <tr>
                <td><p class="">Número de Registros no Carrinho: <?php echo $contadorRegistros; ?></p></td>
                <td><?php echo number_format($valorTotal, 2, ',', '.'); ?></td>
                <td class="text-center">
                    <form method="POST">
                        <input type="hidden" name="" value="<?php  ?>">
                        <a href="pagamento.php"><button type="button" class="btn btn-success">Comprar</button></a>
                    </form>
                </td>
            </tr>
        </table>
    <?php else : ?>
        <p class="text-center">Seu carrinho está vazio.</p>
    <?php endif; ?>


    
</body>

</html>