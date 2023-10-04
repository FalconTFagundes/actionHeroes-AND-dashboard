<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$conn = conectar();

if(!empty($dados) && isset($dados)) {

    $idProd = $dados['id'];
    $ativarProd = $dados['a'];
    
    if($ativarProd == 'A'){
        $retorno = upUm('produto', 'ativo', 'idProduto', 'A', "$idProd");

    } else {

        $retorno = upUm('produto', 'ativo', 'idProduto', 'D', "$idProd");
    }
} else {
    echo json_encode('Ativar não concluido!! ');
}

echo json_encode($retorno);