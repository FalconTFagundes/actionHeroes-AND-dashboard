<?php
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';

$dados_cadastrar = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Escapar os dados do formulário para evitar injeções de SQL
$titleUniversoGeekInsert = mysqli_real_escape_string($conn, $dados_cadastrar['titulo']);

$retornoInsert = insertUm('titleuniversogeek', 'title', "$titleUniversoGeekInsert");

if ($retornoInsert == 'Cadastrado') {
    echo true;
} else {
    echo false;
}
