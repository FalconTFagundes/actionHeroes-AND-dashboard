<?php

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);


switch ($acao) {
    case 'bannerDashboard';
        include_once 'empresa/banner/bannerDashboard.php';
        break;
    case 'excBanner';
        include_once 'empresa/banner/excBanner.php';
        break;
    case 'ativarBanner';
        include_once 'empresa/banner/ativarBanner.php';
        break;


    case 'caracteristicasDashboard';
        include_once 'empresa/caracteristicas/caracteristicasDashboard.php';
        break;
    case 'excCaracteristicas';
        include_once 'empresa/caracteristicas/excCaracteristicas.php';
        break;
    case 'ativarCaracteristicas';
        include_once 'empresa/caracteristicas/ativarCaracteristicas.php';
        break;
    case 'addCaracteristicas';
        include_once 'empresa/caracteristicas/addCaracteristicas.php';
        break;


    case 'comentariosDashboard';
        include_once 'empresa/comentarios/comentariosDashboard.php';
        break;
    case 'excComentario';
        include_once 'empresa/comentarios/excComentario.php';
        break;
    case 'ativarComentario';
        include_once 'empresa/comentarios/ativarComentario.php';
        break;
    case 'uploadComentarios';
        include_once 'uploadComentarios.php';
        break;




    case 'initDashboard';
        include_once 'empresa/init/initDashboard.php';
        break;
    case 'addInit';
        include_once 'empresa/init/addInit.php';
        break;
    case 'excInit';
        include_once 'empresa/init/excInit.php';
        break;
    case 'ativarInit';
        include_once 'empresa/init/ativarInit.php';
        break;





    case 'produtoDashboard';
        include_once 'empresa/produto/produtoDashboard.php';
        break;
    case 'addProduto';
        include_once 'empresa/produto/addProduto.php';
        break;
    case 'excProduto';
        include_once 'empresa/produto/excProduto.php';
        break;
    case 'ativarProduto';
        include_once 'empresa/produto/ativarProduto.php';
        break;




    case 'addTitleUniversoGeek';
        include_once 'empresa/titleUniversoGeek/addTitleUniversoGeek.php';
        break;
    case 'titleUniversoGeekDashboard';
        include_once 'empresa/titleUniversoGeek/titleUniversoGeekDashboard.php';
        break;

    case 'excTitleUniversoGeek';
        include_once 'empresa/titleUniversoGeek/excTitleUniversoGeek.php';
        break;
    case 'ativarTitleUniversoGeek';
        include_once 'empresa/titleUniversoGeek/ativarTitleUniversoGeek.php';
        break;



    case 'universogeekDashboard';
        include_once 'empresa/universoGeek/universoGeekDashboard.php';
        break;
    case 'ativarUniversoGeek';
        include_once 'empresa/universoGeek/ativarUniversoGeek.php';
        break;
    case 'excUniversoGeek';
        include_once 'empresa/universoGeek/excUniversoGeek.php';
        break;
}
