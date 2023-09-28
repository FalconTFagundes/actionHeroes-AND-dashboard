

<div class="container-fluid">
<p class="fs-5" style="color: black;"> Produtos Destaque</p>
  <div class="slider js-slider">
    <?php

    $listarDestaque = listarTodosRegistrosMaisUmCampo('produto', 'nome, img1, valor, ativo, desconto, destaque, freteGratis', 'A', 'S', 'N');
    foreach ($listarDestaque as $itemDestaque) {
      $nomePageDestaque = $itemDestaque->nome;
      $imgPageDestaque = $itemDestaque->img1;
      $valorPageDestaque = $itemDestaque->valor;
      $descontoPageDestaque = $itemDestaque->desconto;
      $fretePageDestaque = $itemDestaque->freteGratis;

    ?>
      <div class="cardCarousel">


        <div class="like"></div>
        <img class="product" src="./img/produtos/<?php echo $imgPageDestaque; ?>">
        <h4><?php echo $nomePageDestaque; ?></h4>
        <div class="rating"></div>
        <div class="price">
          <?php
          $alertDesconto = False;
          if (!empty($descontoPageDestaque)) {
            $alertDesconto = "Desconto $descontoPageDestaque";
          }
          ?>
          <h5><?php echo $valorPageDestaque; ?><span style="color:LimeGreen; font-size: 11pt;"> <?php echo $alertDesconto; ?></span></h5>

        </div>
        <?php
        $alertFrete = False;
        if ($fretePageDestaque == 'S') {
          $alertFrete = "Frete Gratis";
        }
        ?>
        <div class="frete"><span style="color: green ;"><?php echo $alertFrete; ?></span></div>
        <br>
      </div>
    <?php } ?>
  </div>
</div>