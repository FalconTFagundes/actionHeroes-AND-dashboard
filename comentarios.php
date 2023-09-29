<div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Comentários</h6>
                <h1 class="display-6 mb-4">Nossos Clientes</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="owl-carousel testimonial-carousel">

                    <?php
 $comentarioscards = listarTodosRegistros('cardclientes', 'idcardclientes, imagemcliente, comentariocliente, nomecliente, profissao, ativo', 'A');
 foreach ($comentarioscards as $listarcomentarioscards) {
   $imagemclientecomentario = $listarcomentarioscards->imagemcliente;
   $comentariocliente = $listarcomentarioscards->comentariocliente;
   $nomeclientecomentario = $listarcomentarioscards->nomecliente;
   $profissaoclientecomentario = $listarcomentarioscards->profissao;

 ?>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="<?php echo $imagemclientecomentario; ?>" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4"><?php echo $comentariocliente; ?></p>
                            <hr class="w-25 mx-auto">
                            <h5><?php echo $nomeclientecomentario; ?></h5>
                            <span><?php echo $profissaoclientecomentario; ?></span>
                        </div>
                    <?php

                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->