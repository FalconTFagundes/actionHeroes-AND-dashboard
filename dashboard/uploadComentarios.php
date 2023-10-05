<?php 
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once './funcDashboard/funcdashboard.php';

$dados_cadastrar = filter_input_array(INPUT_POST, FILTER_DEFAULT);
print_r($dados_cadastrar);

$imagem = $dados_cadastrar['imagem'];
list($type, $imagem) = explode(';', $imagem);
list(, $imagem) = explode(',', $imagem);

$imagem = base64_decode($imagem);


$imagem_nome = time() . '.png';



file_put_contents("../img/comentarios/" . $imagem_nome, $imagem);

echo "Imagem enviada com sucesso!";


$nomeComentario = $dados_cadastrar['nome'];
$comentario = $dados_cadastrar['comentario'];
$profissaoComentario = $dados_cadastrar['profissao'];
$dataehoraAtual = date("Y-m-d H:i:s");


$retornoUploadComentarios = insertCinco('comentarios', 'img, comentario, nome, profissao, cadastro', "$imagem_nome", "$comentario", "$nomeComentario", "$profissaoComentario", "$dataehoraAtual");
if($retornoUploadComentarios == 'Cadastrado'){  
    echo True;
} else {
    echo False;
}

?>
