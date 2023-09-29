<?php
 $infocaracteristicas = listarTodosRegistros('info', 'idinfo, titulo1, titulo2, descricao, imagem1, imagem2, ativo, titulo1info, descricao1info, titulo2info, descricao2info, titulo3info, descricao3info, titulo4info, descricao4info', 'A');
 foreach ($infocaracteristicas as $caracteristicas) {
   $titulo1caracteristicas = $caracteristicas->titulo1;
   $titulo2caracteristicas = $caracteristicas->titulo2;
   $descricaocaracteristicas = $caracteristicas->descricao;
   $imagem1caracteristicas = $caracteristicas->imagem1;
   $imagem2caracteristicas = $caracteristicas->imagem2;
   $titulo1info = $caracteristicas->titulo1info;
   $descricao1info = $caracteristicas->descricao1info;
   $titulo2info = $caracteristicas->titulo2info;
   $descricao2info = $caracteristicas->descricao2info;
   $titulo3info = $caracteristicas->titulo3info;
   $descricao3info = $caracteristicas->descricao3info;
   $titulo4info = $caracteristicas->titulo4info;
   $descricao4info = $caracteristicas->descricao4info;
    }
 ?>


?>


<div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2"><?php echo $titulo1caracteristicas; ?></h6>
                    <h1 class="display-6 mb-4"><?php echo $titulo2caracteristicas; ?></h1>
                    <p class="mb-5"><?php echo $descricaocaracteristicas?>
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0"><?php echo $titulo1info; ?></h5>
                            </div>
                            <span><?php echo $descricao1info; ?></span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0"><?php echo $titulo2info; ?></h5>
                            </div>
                            <span><?php echo $descricao2info; ?></span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0"><?php echo $titulo3info; ?></h5>
                            </div>
                            <span><?php echo $descricao3info; ?></span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0"><?php echo $titulo4info; ?></h5>
                            </div>
                            <span><?php echo $descricao4info; ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php echo $imagem1caracteristicas; ?>" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php echo $imagem2caracteristicas; ?>" alt="" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->