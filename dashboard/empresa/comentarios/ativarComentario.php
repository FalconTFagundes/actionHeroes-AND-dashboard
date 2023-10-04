<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$conn = conectar();

if(!empty($dados) && isset($dados)) {

    $idComentario = $dados['id'];
    $ativarComentario = $dados['a'];
    
    if($ativarComentario == 'A'){
        $retorno = upUm('comentarios', 'ativo', 'idcomentarios', 'A', "$idComentario");

    } else {

        $retorno = upUm('comentarios', 'ativo', 'idcomentarios', 'D', "$idComentario");
    }
} else {
    echo json_encode('Ativar não concluido!! ');
}

echo json_encode($retorno);