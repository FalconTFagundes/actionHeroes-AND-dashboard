<?php

include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once 'func/func.php';


?>

<head>

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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<?php include_once 'navbar.php'; ?>
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            Ofertas do Dia
        </div>
        <div class="card-body">
            <h5 class="card-title">Conheça as nossas especiais ofertas</h5>
            <p class="card-text">Todos os dias uma oferta diferente é adicionada.</p>
        </div>
        <div class="card-footer text-muted">
            Action Figures
        </div>
    </div>
    <br><br>
    
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
    $listarOfertasDoDia = listarTodosRegistrosOfertas('produto', 'nome, img1, descricao, valor, desconto', 'A', 'S');
    foreach ($listarOfertasDoDia as $itemOfertasDoDia) {
        $nomeOfertas = $itemOfertasDoDia->nome;
        $imgOfertas = $itemOfertasDoDia->img1;
        $descricaoOfertas = $itemOfertasDoDia->descricao;
        $valorOfertas = $itemOfertasDoDia->valor;
        $descontoOfertas = $itemOfertasDoDia->desconto;


    ?>
            <div class="col">
                <div class="card">
                    <img src="./img/produtos/<?php echo $imgOfertas; ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $nomeOfertas; ?></h5>
                        <p class="card-text"><?php echo substr($descricaoOfertas, 0, 100); ?>...</p>
                        <p class="card-text"><?php echo $descontoOfertas;?></p>

                    </div>
                </div>
            </div>
            <?php  } ?>
        </div>

</div>



<?php include_once 'footer.php'; ?>