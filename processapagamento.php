<?php

    include_once 'func/func.php';
    include_once 'config/conexao.php';
    include_once 'config/constantes.php';
   



if (isset($_POST['telefone']) && isset($_POST['cep']) && isset($_POST['email_contato']) && isset($_POST['cpf']) && isset($_POST['rua']) && isset($_POST['cidade']) && isset($_POST['estado']) && isset($_POST['bairro']) && isset($_POST['numero']) && isset($_POST['complemento'])) {
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $email_contato = $_POST['email_contato'];
    $cpf = $_POST['cpf'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];

    $usuario_id = $_SESSION['usuario_id'];
    $dataehoraAtual = date('Y-m-d H:i:s');
    $conn = conectarAoBanco();

    
    $retornoInsertPagamento = insertDoze('cliente', 'usuario_id, telefone, cep, email_contato, cpf, rua, cidade, estado, bairro, numero, complemento, cadastro', "$usuario_id", "$telefone", "$cep", "$email_contato", "$cpf", "$rua", "$cidade", "$estado", "$bairro", "$numero", "$complemento", "$dataehoraAtual");



    // Redirecionar para a página de pagamento do PIX
    header('Location: qr.php');
    exit;
}
?>

<script>
    alert('chegou aqui');
</script>
