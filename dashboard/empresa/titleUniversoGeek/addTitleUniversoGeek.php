<?php
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';

$dados_cadastrar = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$titleUniversoGeek = $dados_cadastrar['titulo'];
$dataehoraAtual = date("Y-m-d H:i:s");

$retornoInsert = insertDois('titleuniversogeek', 'title, cadastro', "$titleUniversoGeek", "$dataehoraAtual");
if ($retornoInsert == 'Cadastrado') {
    echo true;
} else {
    echo false;
}
?>
