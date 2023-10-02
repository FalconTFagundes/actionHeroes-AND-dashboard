<?php

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);


switch ($acao) {
    case 'banner';
        include_once 'empresa/banner/bannerDashboard.php';
        break;
    case 'comentarios';
        include_once 'empresa/comentarios/comentariosDashboard.php';
        break;
    case 'caracteristicas';
        include_once 'empresa/caracteristicas/caracteristicasDashboard.php';
        break;
    case 'init';
        include_once 'empresa/init/initDashboard.php';
        break;
    case 'produto';
        include_once 'empresa/produto/produtoDashboard.php';
        break;
    case 'titleuniversogeek';
        include_once 'empresa/titleUniversoGeek/titleUniversoGeekDashboard.php';
        break;
    case 'universogeek';
        include_once 'empresa/universoGeek/universoGeekDashboard.php';
        break;
}
