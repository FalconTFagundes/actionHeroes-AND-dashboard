<?php
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';

$dados_cadastrar = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$titleUniversoGeek = $dados_cadastrar['titulo'];

$retornoInsert = insertUm('titleuniversogeek', 'title', "$titleUniversoGeek");
if ($retornoInsert == 'Cadastrado') {
    echo true;
} else {
    echo false;
}
?>
