<?php
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';

$dados_cadastrar = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$comentario = $dados_cadastrar['comentario'];
$nomeComentario = $dados_cadastrar['nome'];
$profissaoComentario = $dados_cadastrar['profissao'];
$dataehoraAtual = date("Y-m-d H:i:s");

$retornoInsert = insertquatro('comentarios', 'comentario, nome, profissao, cadastro', "$comentario", "$nomeComentario", "$profissaoComentario", "$dataehoraAtual");
if ($retornoInsert == 'Cadastrado') {
    echo true;
} else {
    echo false;
}
?>
