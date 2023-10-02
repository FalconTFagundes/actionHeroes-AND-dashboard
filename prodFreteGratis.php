<div class="container-fluid">
  <p class="fs-5" style="color: black;"> Destaque Frete Gratis</p>
  <div class="slider js-slider">
    <?php
    $listarFrete = listarTodosRegistrosMaisUmCampo('produto', 'idproduto, nome, img1, valor, ativo, desconto, destaque, freteGratis', 'A', 'N', 'S');
    

    if (is_array($listarFrete) && !empty($listarFrete)) {
      foreach ($listarFrete as $itemFrete) {
        $idPageFrete = $itemFrete->idproduto;
        $nomePageFrete = $itemFrete->nome;
        $imgPageFrete = $itemFrete->img1;
        $valorPageFrete = $itemFrete->valor;
        $descontoPageFrete = $itemFrete->desconto;
        $fretePageFrete = $itemFrete->freteGratis;
    ?>
        <div class="cardCarousel">
          <a href="detalheProduto.php?idproduto=<?php echo $idPageFrete; ?>">
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
          <div class="frete"><span style="color: green;"><?php echo $alertFrete; ?></span></div>
          </a>
          <br>
       
        </div>
    <?php
      }
    } else {
      echo "Nenhum produto encontrado.";
    }
    ?>
  </div>
</div>



