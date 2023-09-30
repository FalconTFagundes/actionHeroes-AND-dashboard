<?php 

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch($acao){
    case 'banner';
        include_once 'empresa/banner.php';
        break;
    case 'comentarios';
        include_once 'empresa/comentarios.php';
        break;
    case 'informacoes';
        include_once 'empresa/informacoes.php';
        break;
}