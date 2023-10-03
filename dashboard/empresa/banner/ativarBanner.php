<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$conn = conectar();

if(!empty($dados) && isset($dados)) {

    $idBanner = $dados['id'];
    $ativarBanner = $dados['a'];
    
    if($ativarBanner == 'A'){
        $retorno = upUm('banner', 'ativo', 'idbanner', 'A', "$idBanner");

    } else {

        $retorno = upUm('banner', 'ativo', 'idbanner', 'D', "$idBanner");
    }
} else {
    echo json_encode('Ativar não concluido!! ');
}

echo json_encode($retorno);