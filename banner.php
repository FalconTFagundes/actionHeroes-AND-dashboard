<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="banner" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $retornoBanner = listarTodosRegistros('banner','idbanner, img, cadastro, alteracao, ativo','');
            $primeiraImagem = true;

            foreach ($retornoBanner as $itemBanner) {
                $bannerImg = $itemBanner->img;
            ?>

            <div class="carousel-item <?php echo $primeiraImagem ? 'active' : ''; ?>">
                <img class="w-100 custom-height-banner" src="./img/banner/<?php echo $bannerImg; ?>" alt="Image">
            </div>
            
            <?php
                $primeiraImagem = false;
            }
            ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
