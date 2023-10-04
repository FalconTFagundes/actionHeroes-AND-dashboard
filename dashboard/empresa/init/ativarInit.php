<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$conn = conectar();

if(!empty($dados) && isset($dados)) {

    $idInit = $dados['id'];
    $ativarInit = $dados['a'];
    
    if($ativarInit == 'A'){
        $retorno = upUm('init', 'ativo', 'idInit', 'A', "$idInit");

    } else {

        $retorno = upUm('init', 'ativo', 'idInit', 'D', "$idInit");
    }
} else {
    echo json_encode('Ativar não concluido!! ');
}

echo json_encode($retorno);