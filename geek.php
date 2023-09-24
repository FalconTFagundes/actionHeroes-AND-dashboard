<?php

$retornoTitleGeek = listarTodosRegistros('titleuniversogeek', 'title', 'A');
foreach ($retornoTitleGeek as $itemTitleGeek) {
    $titleGeek = $itemTitleGeek->title;
}

?>


<p class="text-center"><b><?php echo $titleGeek; ?></b></p>


<marquee id="textomexendohome" bgcolor="white" loop="20" scrollamount="40" width="100%" style="height: 10%;">
    <?php
    $retornoImgGeek = listarTodosRegistros('universoGeek', 'img', 'A');
    foreach ($retornoImgGeek as $itemImgGeek) {
        $imgGeek = $itemImgGeek->img;
    ?>
        <img src="img/marcas/<?php echo $imgGeek; ?>" alt="..." width="150px" class="mx-3">
    <?php } ?>
</marquee>