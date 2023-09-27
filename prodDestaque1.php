<div class="container">
    <p class="fs-5" style="color: black;"> Produtos Com Frete Gratis</p>
</div>
<div id="prodDestaque" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="card-group">
                    <?php
                   
                    $listarDestaque = listarTodosRegistrosMaisUmCampo('produto', 'nome, img1, valor, ativo, desconto, destaque, freteGratis', 'A', 'N', 'S');
                    foreach ($listarDestaque as $itemDestaque) {
                        $nomePageDestaque = $itemDestaque->nome;
                        $imgPageDestaque = $itemDestaque->img1;
                        $valorPageDestaque = $itemDestaque->valor;
                        $descontoPageDestaque = $itemDestaque->desconto;
                        $fretePageDestaque = $itemDestaque->freteGratis;
                        $controleCarrosel = 0; /* proximo passo - ajustar controle */

                    ?>

                        <div class="card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/<?php echo $imgPageDestaque; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $nomePageDestaque; ?></h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$<?php echo $valorPageDestaque; ?></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto <?php echo $descontoPageDestaque; ?></b></p>
                                <?php
                                $msgFrete = False;
                                if ($fretePageDestaque == 'S') {
                                    $msgFrete = "Frete Gratis";
                                }
                                ?>
                                <p class="card-text" style="color: LimeGreen;"><b><?php echo $msgFrete; ?></b></p>
                            </div>
                        </div>
                    <?php
                    }
                    $controleCarrosel++;

                    if ($controleCarrosel >=6) {

                    ?>
                </div>

            </div>
        </div>

        <div class="carousel-item">
            <div class="container">
                <div class="card-group">
                    <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                        <img src="img/produtos/<?php echo $imgPageDestaque; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $nomePageDestaque; ?></h5>
                            <p class="card-text" style="color: black; font-size: 18pt ;">R$<?php echo $valorPageDestaque; ?></p>
                            <p class="card-text" style="color: LimeGreen;"><b>Desconto <?php echo $descontoPageDestaque; ?></b></p>

                            <p class="card-text" style="color: LimeGreen;"><b><?php echo $msgFrete; ?></b></p>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#prodDestaque" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#prodDestaque" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>