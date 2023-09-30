<?php 

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch($acao){
    case 'banner';
        include_once 'empresa/banner.php';
        break;
}