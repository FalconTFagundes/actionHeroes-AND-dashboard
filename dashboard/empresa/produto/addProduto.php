<?php
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';

$dados_cadastrar = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$nomeProd = $dados_cadastrar['nome'];
$descricaoProd = $dados_cadastrar['descricao'];
$materialProd = $dados_cadastrar['material'];
$dimensoesProd = $dados_cadastrar['dimensoes'];
$pesoProd = $dados_cadastrar['peso'];
$valorProd = $dados_cadastrar['valor'];
$descontoProd = $dados_cadastrar['desconto'];
$dataehoraAtual = date("Y-m-d H:i:s");
      
$retornoInsert = insertOito('produto', 'nome, descricao, material, dimensoes, peso, valor, cadastro, desconto', "$nomeProd", "$descricaoProd", "$materialProd", "$dimensoesProd", "$pesoProd", "$valorProd", "$descontoProd", "$dataehoraAtual");
if ($retornoInsert == 'Cadastrado') {
    echo true;
} else {
    echo false;
}
?>
