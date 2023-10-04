<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';


$imagem = filter_input(INPUT_POST, 'imagem', FILTER_DEFAULT);



list($type, $imagem) = explode(';', $imagem);
list(, $imagem) = explode(',', $imagem);


$imagem = base64_decode($imagem);


$imagem_nome = time() . '.png';



file_put_contents("../img/marcas/" . $imagem_nome, $imagem);

echo "Imagem enviada com sucesso!";

$dataehoraAtual = date("Y-m-d H:i:s");

$retornoUploadUniversoGeek = insertDois('universogeek','img, cadastro', "$imagem_nome", "$dataehoraAtual");

if($retornoUploadUniversoGeek == 'Cadastrado'){  
    echo True;
} else {
    echo False;
}

?>


