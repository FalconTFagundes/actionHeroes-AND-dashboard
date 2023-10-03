<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


$imagem = filter_input(INPUT_POST, 'imagem', FILTER_DEFAULT);



list($type, $imagem) = explode(';', $imagem);
list(, $imagem) = explode(',', $imagem);


$imagem = base64_decode($imagem);


$imagem_nome = time() . '.png';



file_put_contents("../img/caracteristicas/" . $imagem_nome, $imagem);

echo "Imagem enviada com sucesso!";

$retornoUploadCaracteristicas1 = insertDois('info','imagem1, imagem2', "$imagem_nome", "$imagem_nome");


if($retornoUploadCaracteristicas == 'Gravado'){  
    echo True;
} else {
    echo False;
}

?>
