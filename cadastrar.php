<?php



    include_once 'config/conexao.php';
    include_once 'config/constantes.php';
    include_once 'func/func.php';
   



$nome = filter_input(INPUT_POST, 'nomeCliente', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenomeCliente', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'emailCliente', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senhaCliente', FILTER_SANITIZE_STRING);
$dataehoraAtual = date("Y-m-d H:i:s");

// Chame a função insertquatro para inserir os dados
$resultado = insertCinco('usuario', 'nome, sobrenome, email, senha, cadastro', $nome, $sobrenome, $email, $senha, $dataehoraAtual);

// Verifique o resultado da inserção
if ($resultado === "Cadastrado") {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar os dados: " . $resultado;
}
session_start();
$_SESSION['mensagem'] = "Cadastro realizado com sucesso";


header("Location: index.php");
exit;
