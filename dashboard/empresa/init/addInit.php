<?php
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';

$dados_cadastrar = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$iconTextInit = $dados_cadastrar['iconInit'];
$textInit = $dados_cadastrar['textoInit'];
$dataehoraAtual = date("Y-m-d H:i:s");

$retornoInsert = insertTres('init', 'icon, text, cadastro', "$iconTextInit", "$textInit", "$dataehoraAtual");
if ($retornoInsert == 'Cadastrado') {
    echo true;
} else {
    echo false;
}
?>
