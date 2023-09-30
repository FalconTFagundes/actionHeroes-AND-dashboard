<?php

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao) {
    case 'banner';
        include_once 'empresa/bannerDashboard.php';
        break;
    case 'comentarios';
        include_once 'empresa/comentariosDashboard.php';
        break;
    case 'caracteristicas';
        include_once 'empresa/caracteristicasDashboard.php';
        break;
    case 'init';
        include_once 'empresa/initDashboard.php';
        break;
    case 'produto';
        include_once 'empresa/produtoDashboard.php';
        break;
}
