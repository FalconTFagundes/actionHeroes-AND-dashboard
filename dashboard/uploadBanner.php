<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


$imagem = filter_input(INPUT_POST, 'imagem', FILTER_DEFAULT);



list($type, $imagem) = explode(';', $imagem);
list(, $imagem) = explode(',', $imagem);


$imagem = base64_decode($imagem);


$imagem_nome = time() . '.png';



file_put_contents("../img/banner/" . $imagem_nome, $imagem);

echo "Imagem enviada com sucesso!";

$retornoUploadBanner = insertUm('banner','img', "$imagem_nome");
if($retornoUploadBanner == 'Gravado'){  
    echo True;
} else {
    echo False;
}

?>
