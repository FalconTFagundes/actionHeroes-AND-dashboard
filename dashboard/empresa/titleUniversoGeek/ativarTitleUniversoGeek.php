<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$conn = conectar();

if(!empty($dados) && isset($dados)) {

    $idTitleUniversoGeek = $dados['id'];
    $ativarTitleuniversoGeek = $dados['a'];
    
    if($ativarTitleuniversoGeek == 'A'){
        $retorno = upUm('titleuniversogeek', 'ativo', 'idtitleUniversoGeek', 'A', "$idTitleUniversoGeek");

    } else {

        $retorno = upUm('titleuniversogeek', 'ativo', 'idtitleUniversoGeek', 'D', "$idTitleUniversoGeek");
    }
} else {
    echo json_encode('Ativar não concluido!! ');
}

echo json_encode($retorno);