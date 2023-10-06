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
file_put_contents("../img/produtos/" . $imagem_nome1, $imagem1);
echo "Imagem 1 enviada com sucesso!";

// IMG2
$imagem2 = filter_input(INPUT_POST, 'imagem2', FILTER_DEFAULT);
list($type2, $imagem2) = explode(';', $imagem2);
list(, $imagem2) = explode(',', $imagem2);
$imagem2 = base64_decode($imagem2);
$imagem_nome2 = time() . '_imagem2.png';
file_put_contents("../img/produtos/" . $imagem_nome2, $imagem2);
echo "Imagem 2 enviada com sucesso!";

// IMG3
$imagem3 = filter_input(INPUT_POST, 'imagem3', FILTER_DEFAULT);
list($type2, $imagem3) = explode(';', $imagem3);
list(, $imagem3) = explode(',', $imagem3);
$imagem3 = base64_decode($imagem3);
$imagem_nome3 = time() . '_imagem3.png';
file_put_contents("../img/produtos/" . $imagem_nome3, $imagem3);
echo "Imagem 3 enviada com sucesso!";


$dados_cadastrar = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$nomeProd = $dados_cadastrar['nome'];
$descricaoProd = $dados_cadastrar['descricao'];
$materialProd = $dados_cadastrar['material'];
$dimensoesProd = $dados_cadastrar['dimensoes'];
$pesoProd = $dados_cadastrar['peso'] . 'g';
$dataehoraAtual = Date("Y-m-d H:i:s");
$valorProd = $dados_cadastrar['valor'];
$descontoProd = $dados_cadastrar['desconto'] . '%';

//Ajustando valor caso tenha desconto
if(!empty($descontoProd)){
    $valorDesconto = ($descontoProd / 100) * $valorProd;
    $valorProd = $valorProd - $valorDesconto;
}


/* Ajustando classificação de Frete Gratis ou Destaque */
$classificacao = $dados_cadastrar['classificacaoProd'];

if($classificacao == 'fretegratis'){
    $freteClassificado = 'S';
    $destaqueClassificado = 'N';

} else {
    $freteClassificado = 'N';
    $destaqueClassificado = 'S';
}



$retornoInsert = insertTreze('produto', 'nome, img1, img2, img3, descricao, material, dimensoes, peso, valor, cadastro, desconto, destaque, freteGratis', "$nomeProd","$imagem_nome1","$imagem_nome2","$imagem_nome3","$descricaoProd","$materialProd","$dimensoesProd","$pesoProd","$valorProd","$dataehoraAtua","$descontoProd", "$destaqueClassificado","$freteClassificado");
if ($retornoInsert == 'Gravado') {
    echo true;
} else {
    echo false;
}


?>
