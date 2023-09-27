<div class="container">
    <p class="fs-5" style="color: black;"> Produtos Com Frete Gratis</p>
</div>
<div id="prodDestaque" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="card-group">
                    <?php
                    $listarDestaqueUm = listarTodosRegistrosMaisUmCampo('produto', 'nome, img1, valor, ativo, desconto, destaque, freteGratis', 'A', 'N', 'S');
                    foreach ($listarDestaqueUm as $itemDestaqueUm) {
                        $nomePageDestaqueUm = $itemDestaqueUm->nome;
                        $imgPageDestaqueUm = $itemDestaqueUm->img1;
                        $valorPageDestaqueUm = $itemDestaqueUm->valor;
                        $descontoPageDestaqueUm = $itemDestaqueUm->desconto;
                        $fretePageDestaqueUm = $itemDestaqueUm->freteGratis;

                    ?>

                        <div class="card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/<?php echo $imgPageDestaqueUm; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $nomePageDestaqueUm; ?></h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$<?php echo $valorPageDestaqueUm; ?></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto <?php echo $descontoPageDestaqueUm; ?></b></p>
                                <?php
                                $msgFrete = False;
                                if ($fretePageDestaqueUm == 'S') {
                                    $msgFrete = "Frete Gratis";
                                }
                                ?>
                                <p class="card-text" style="color: LimeGreen;"><b><?php echo $msgFrete; ?></b></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>


        <div class="carousel-item">
            <div class="container">
                <div class="card-group">
                    <?php
                    $listarDestaqueDois = listarTodosRegistrosMaisUmCampo('produto', 'nome, img1, valor, ativo, desconto, destaque, freteGratis', 'A', 'N', 'S');
                    foreach ($listarDestaqueDois as $itemDestaqueDois) {
                        $nomePageDestaqueDois = $itemDestaqueDois->nome;
                        $imgPageDestaqueDois = $itemDestaqueDois->img1;
                        $valorPageDestaqueDois = $itemDestaqueDois->valor;
                        $descontoPageDestaqueDois = $itemDestaqueDois->desconto;
                        $fretePageDestaqueDois = $itemDestaqueDois->freteGratis;

                    ?>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/<?php echo $imgPageDestaqueDois; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $nomePageDestaqueDois; ?></h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$<?php echo $valorPageDestaqueDois; ?></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto <?php echo $descontoPageDestaqueDois; ?></b></p>
                                <?php
                                $msgFrete = False;
                                if ($fretePageDestaqueDois == 'S') {
                                    $msgFrete = "Frete Gratis";
                                }
                                ?>
                                <p class="card-text" style="color: LimeGreen;"><b><?php echo $msgFrete; ?></b></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#prodDestaque" id="" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#prodDestaque" id="" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>