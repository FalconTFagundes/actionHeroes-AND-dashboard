<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$conn = conectar();

if(!empty($dados) && isset($dados)) {

    $idInfo = $dados['id'];
    $ativarInfo = $dados['a'];
    
    if($ativarInfo == 'A'){
        $retorno = upUm('info', 'ativo', 'idinfo', 'A', "$idInfo");

    } else {

        $retorno = upUm('info', 'ativo', 'idinfo', 'D', "$idInfo");
    }
} else {
    echo json_encode('Ativar não concluido!! ');
}

echo json_encode($retorno);