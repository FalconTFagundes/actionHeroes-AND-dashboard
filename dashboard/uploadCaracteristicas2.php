<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


$imagem2 = filter_input(INPUT_POST, 'imagem2', FILTER_DEFAULT);



list($type, $imagem2) = explode(';', $imagem2);
list(, $imagem2) = explode(',', $imagem2);



$imagem2 = base64_decode($imagem2);

$imagem_nome2 = time() . '.png';


file_put_contents("../img/caracteristicas/" . $imagem_nome2, $imagem2);


echo "Imagem enviada com sucesso!";

$retornoUploadCaracteristicas = insertUm('info','imagem2', "$imagem_nome2");


if($retornoUploadCaracteristicas == 'Gravado'){  
    echo True;
} else {
    echo False;
}

?>
