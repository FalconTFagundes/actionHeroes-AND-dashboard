<?php 
include_once './funcDashboard/funcdashboard.php';
include_once 'config/conexao.php';
include_once 'config/constantes.php';


// Receber a imagem
$imagem = filter_input(INPUT_POST, 'imagem', FILTER_DEFAULT);
//var_dump($imagem);

// Separa as informações da imagem base64 pelo ";"
list($type, $imagem) = explode(';', $imagem);
list(, $imagem) = explode(',', $imagem);

// Desconverter a imagem base64
$imagem = base64_decode($imagem);

// Atribuir a extensão da imagem PNG
$imagem_nome = time() . '.png';

// Realizar o upload da imagem

file_put_contents("../img/banner/" . $imagem_nome, $imagem);

echo "Imagem enviada com sucesso!";

$retornoUploadBanner = insertUm('banner','img', "$imagem_nome");
if($retornoUploadBanner == 'Gravado'){
    echo True;
} else {
    echo False;
}

?>
