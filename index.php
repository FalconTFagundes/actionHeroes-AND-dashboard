<!DOCTYPE html>
<html lang="pt-br">

<?php include_once 'head.php'; ?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <?php include_once 'navbar.php'; ?>



    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 custom-height-banner" src="./img/banner/batman.jpg" alt="Image">
                </div>


                <div class="carousel-item">
                    <img class="w-100 custom-height-banner" src="img/banner/superman.jpg" alt="Image">
                </div>


                <div class="carousel-item">
                    <img class="w-100 custom-height-banner" src="img/banner/deadpool.jpg" alt="Image">
                </div>
            </div>



            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <br><br>
    <div class="container">


        <div class="card border-5" style="text-align: center;">
            <div class="card-body">
                <i class="mdi mdi-account-lock-open"></i> Segurança nas suas compras |
                <i class="mdi mdi-account-cash"> </i> Cabe no seu Bolso |
                <i class="mdi mdi-thumb-up"> </i> Produtos de Qualidade |
                <i class="mdi mdi-bike-fast"> </i> Entrega Rápida
            </div>
        </div>
    </div>

    <br><br><br>
    <p class="text-center"><b>O SEU UNIVERSO GEEK</b></p>

    <marquee id="textomexendohome" bgcolor="white" loop="20" scrollamount="40" width="100%" style="height: 10%;">
        <img src="img/marcas/DBZ.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/marvel.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/narutoLogo.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/avengersMarvel.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/DC.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/nitendo.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/onePiece.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/sega.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/streetFighter.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/warnerBros.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/mortalKombat.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/mario.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/cavaleirosdoZodiaco.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/cod.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/dokeyKong.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/nanatsunoTaizai.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/atackOnTitan.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/bleach.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/jojo.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/jujutsuKaizen.png" alt="..." width="150px" class="mx-3">
        <img src="img/marcas/deathNote.png" alt="..." width="150px" class="mx-3">
    </marquee>

    <br><br><br><br><br>

    <div class="container">
        <p class="fs-5" style="color: black;"> Produtos Com Desconto</p>

    </div>
    <div id="prodDestaque" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="card-group " >

                        <!-- Primeiro grupo de cards -->

                        <div class="card mb-3 card-hover-index"style="border: 3px black solid;">
                            <img src="img/produtos/esqueletao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eskeleto</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 50%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/esqueletao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eskeleto</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 50%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/esqueletao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eskeleto</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 50%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/esqueletao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eskeleto</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 50%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/esqueletao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eskeleto</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 50%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="card-group">
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/deadpool.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">deadpool</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$1600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 30%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/deadpool.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">deadpool</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$1600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 30%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/deadpool.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">deadpool</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$1600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 30%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/deadpool.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">deadpool</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$1600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 30%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/deadpool.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">deadpool</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$1600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 30%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#prodDestaque" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <!-- segundo carrosel -->

    <br><br><br>
    <div class="container">
        <p class="fs-5" style="color: black;"> Produtos Destaque</p>

    </div>
    <div id="prodDestaqueDois" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="card-group">

                        <!-- Primeiro grupo de cards -->

                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/esqueletao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eskeleto</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 50%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/esqueletao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eskeleto</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 50%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/esqueletao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eskeleto</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 50%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/esqueletao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eskeleto</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 50%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/esqueletao.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eskeleto</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 50%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="card-group">
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/deadpool.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">deadpool</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$1600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 30%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/deadpool.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">deadpool</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$1600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 30%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/deadpool.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">deadpool</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$1600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 30%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/deadpool.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">deadpool</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$1600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 30%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>
                        <div class="card mb-3 card mb-3 card-hover-index" style="border: 3px black solid;">
                            <img src="img/produtos/deadpool.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">deadpool</h5>
                                <p class="card-text" style="color: black; font-size: 18pt ;">R$1600,00</p>
                                <p class="card-text" style="color: LimeGreen;"><b>Desconto 30%</b></p>
                                <p class="card-text" style="color: LimeGreen;"><b>Frete Gratis</b></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

        <a class="carousel-control-prev" href="#prodDestaqueDois" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>








    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase mb-2">Explore Novos Mundos</h6>
            <h1 class="display-6 mb-4 text-light">A maior variação de Action Figure do mundo!</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 cards3d mx-auto d-flex align-items-center" style="background-color: transparent; border: none;">
                    <?php include_once 'card1.php'; ?>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 cards3d mx-auto d-flex align-items-center" style="background-color: transparent; border: none;">
                    <?php include_once 'card2.php'; ?>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 cards3d mx-auto d-flex align-items-center" style="background-color: transparent; border: none;">
                    <?php include_once 'card3.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>



         

        </div>
    </div>
   
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">A sua coleção merece!</h6>
                    <h1 class="display-6 mb-4">Enviamos para todo o Brasil</h1>
                    <p class="mb-5">Compre seu action figure no conforto de sua casa
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Compra Segura</h5>
                            </div>
                            <span>Compre suas figuras de ação pela internet sem correr nenhum risco.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Entrega Rápida</h5>
                            </div>
                            <span>Receba seu mais novo produto sem demora.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Produçao em Massa</h5>
                            </div>
                            <span>Produzimos os action figures de acordo com a demanda de nossos clientes.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Perfeito Acabamento</h5>
                            </div>
                            <span>Nossos action figures são detalhados, não fugimos da realidade e do estilo do personagem</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/kr.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="img/luffy.jpg" alt="" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
    aqui vem a aba de categorias
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Comentários</h6>
                <h1 class="display-6 mb-4">Nossos Clientes</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/comentarios/lcp.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Irado! Consegui completar minha coleção comprando com vocês! Super recomendo.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Luciano Pettersen</h5>
                            <span>Instrutor SENAI - FIEMG</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/comentarios/gabigol.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Melhores Action Figures que já vi! Adorei.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Gabigol</h5>
                            <span>Jogador Profissional de Futebol Masculino</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/comentarios/diegao.png" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Amo comprar com a Action Heroes, completei minha coleção de Kratos Humanóides Gigantes com vocês, super irado!
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>Diego Programas</h5>
                            <span>O bom de guerra</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <?php include_once 'footer.php'; ?>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>