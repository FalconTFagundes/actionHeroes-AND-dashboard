<?php 

include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';

$dados_delete = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$idComentario = $dados_delete['id'];
excluirDashboard('comentarios', 'idcomentarios', "$idComentario");
