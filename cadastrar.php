<?php


    include_once 'func/func.php';
    include_once 'config/conexao.php';
    include_once 'config/constantes.php';
   



$nome = filter_input(INPUT_POST, 'nomeCliente', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenomeCliente', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'emailCliente', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senhaCliente', FILTER_SANITIZE_STRING);

// Chame a função insertquatro para inserir os dados
$resultado = insertquatro('usuario', 'nome, sobrenome, email, senha', $nome, $sobrenome, $email, $senha);

// Verifique o resultado da inserção
if ($resultado === "Cadastrado") {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar os dados: " . $resultado;
}


