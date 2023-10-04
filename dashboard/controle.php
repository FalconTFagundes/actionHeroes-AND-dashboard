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
    case 'addComentario';
        include_once 'empresa/comentarios/addComentario.php';
        break;




    case 'initDashboard';
        include_once 'empresa/init/initDashboard.php';
        break;
    case 'produtoDashboard';
        include_once 'empresa/produto/produtoDashboard.php';
        break;



    case 'addTitleUniversoGeek';
        include_once 'addTitleUniversoGeek.php';
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
}
