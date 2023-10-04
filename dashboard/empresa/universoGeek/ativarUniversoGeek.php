<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$conn = conectar();

if(!empty($dados) && isset($dados)) {

    $idUniversoGeek = $dados['id'];
    $ativarUniversoGeek = $dados['a'];
    
    if($ativarUniversoGeek == 'A'){
        $retorno = upUm('universogeek', 'ativo', 'iduniversoGeek', 'A', "$idUniversoGeek");

    } else {

        $retorno = upUm('universogeek', 'ativo', 'iduniversoGeek', 'D', "$idUniversoGeek");
    }
} else {
    echo json_encode('Ativar não concluido!! ');
}

echo json_encode($retorno);