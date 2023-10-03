<?php
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';

$dados_cadastrar = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$titulo1CC = $dados_cadastrar['titulo1'];
$titulo2CC = $dados_cadastrar['titulo2'];

$descricaoCC = $dados_cadastrar['descricaoCC'];

$box1CC = $dados_cadastrar['box1'];
$desc1CC = $dados_cadastrar['desc1'];

$box2CC = $dados_cadastrar['box2'];
$desc2CC = $dados_cadastrar['desc2'];

$box3CC = $dados_cadastrar['box3'];
$desc3CC = $dados_cadastrar['desc3'];

$box4CC = $dados_cadastrar['box4'];
$desc4CC = $dados_cadastrar['desc4'];



$retornoInsert =  insertOnze('info', 'titulo1, titulo2, descricao, imagem1, imagem2, titulo1info, descricao1info, titulo2info, descricao2info, titulo3info, descricao3info, titulo4info, descricao4info', "$titulo1CC","$titulo2CC","$descricaoCC","$box1CC","$desc1CC","$box2CC","$desc2CC","$box3CC","$desc3CC","$box4CC","$desc4CC");

if ($retornoInsert == 'Cadastrado') {
    echo true;
} else {
    echo false;
}
