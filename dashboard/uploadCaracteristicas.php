<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


// IMG1
$imagem1 = filter_input(INPUT_POST, 'imagem1', FILTER_DEFAULT);
list($type1, $imagem1) = explode(';', $imagem1);
list(, $imagem1) = explode(',', $imagem1);
$imagem1 = base64_decode($imagem1);
$imagem_nome1 = time() . '_imagem1.png';
file_put_contents("../img/caracteristicas/" . $imagem_nome1, $imagem1);
echo "Imagem 1 enviada com sucesso!";

// IMG2
$imagem2 = filter_input(INPUT_POST, 'imagem2', FILTER_DEFAULT);
list($type2, $imagem2) = explode(';', $imagem2);
list(, $imagem2) = explode(',', $imagem2);
$imagem2 = base64_decode($imagem2);
$imagem_nome2 = time() . '_imagem2.png';
file_put_contents("../img/caracteristicas/" . $imagem_nome2, $imagem2);
echo "Imagem 2 enviada com sucesso!";


$dados_cadastrar = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$titulo1CC = $dados_cadastrar['titulo1'];
$titulo2CC = $dados_cadastrar['titulo2'];

$descricaoCC = $dados_cadastrar['descricaoCC'];

$box1CC = $dados_cadastrar['box1'];
$desc1CC = $dados_cadastrar['desc1'];

$box2CC = $dados_cadastrar['box2'];
$desc2CC = $dados_cadastrar['desc2'];

$box3CC = $dados_cadastrar['box3'];
$desc3CC = $dados_cadastrar['desc3'];

$box4CC = $dados_cadastrar['box4'];
$desc4CC = $dados_cadastrar['desc4'];

$dataehoraAtual = Date("Y-m-d H:i:s");

$retornoInsert = insertQuatorze('info', 'titulo1, titulo2, descricao, imagem1, imagem2, titulo1info, descricao1info, titulo2info, descricao2info, titulo3info, descricao3info, titulo4info, descricao4info, cadastro', "$titulo1CC","$titulo2CC","$descricaoCC","$imagem_nome1","$imagem_nome2","$box1CC","$desc1CC","$box2CC","$desc2CC","$box3CC","$desc3CC","$box4CC","$desc4CC","$dataehoraAtual");
if ($retornoInsert == 'Gravado') {
    echo true;
} else {
    echo false;
}


?>
