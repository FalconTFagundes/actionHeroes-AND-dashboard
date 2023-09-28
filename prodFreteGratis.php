

<div class="container-fluid">
<p class="fs-5" style="color: black;"> Destaque Frete Gratis</p>
  <div class="slider js-slider">
    <?php

    $listarFrete = listarTodosRegistrosMaisUmCampo('produto', 'nome, img1, valor, ativo, desconto, destaque, freteGratis', 'A', 'N', 'S');
    foreach ($listarFrete as $itemFrete) {
      $nomePageFrete = $itemFrete->nome;
      $imgPageFrete = $itemFrete->img1;
      $valorPageFrete = $itemFrete->valor;
      $descontoPageFrete = $itemFrete->desconto;
      $fretePageFrete = $itemFrete->freteGratis;

    ?>
      <div class="cardCarousel">


        <div class="like"></div>
        <img class="product" src="./img/produtos/<?php echo $imgPageFrete; ?>">
        <h4><?php echo $nomePageFrete; ?></h4>
        <div class="rating"></div>
        <div class="price">
          <?php
          $alertDesconto = False;
          if (!empty($descontoPageFrete)) {
            $alertDesconto = "Desconto $descontoPageFrete";
          }
          ?>
          <h5><?php echo $valorPageFrete; ?><span style="color:LimeGreen; font-size: 11pt;"> <?php echo $alertDesconto; ?></span></h5>

        </div>
        <?php
        $alertFrete = False;
        if ($fretePageFrete == 'S') {
          $alertFrete = "Frete Gratis";
        }
        ?>
        <div class="frete"><span style="color: green ;"><?php echo $alertFrete; ?></span></div>
        <br>

      </div>
    <?php } ?>
  </div>
</div>