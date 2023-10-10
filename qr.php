<?php
session_start();
include_once 'func/func.php';
include_once 'config/conexao.php';
include 'QR/phpqrcode/qrlib.php';

$usuarioID = isset($_SESSION['usuario_id']) ? $_SESSION['usuario_id'] : 0; 

$conexao = conectarAoBanco();

$consulta = "SELECT telefone, cpf FROM cliente WHERE idcliente = $usuarioID"; // Substitua "cliente" pelo nome da sua tabela de clientes
$resultado = mysqli_query($conexao, $consulta);

$consult = "SELECT nome FROM usuario WHERE idusuario = $usuarioID"; // Substitua "usuario" pelo nome da sua tabela de usuários
$result = mysqli_query($conexao, $consult);

$nome = "";


$qrCodeContent = "Chave PIX: actionfigurespagamento@gmail.com.br\n";

// Gerar o QR code como uma string
ob_start();
QRcode::png($qrCodeContent, null, QR_ECLEVEL_L);
$qrCodeImage = ob_get_clean();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Título da Página</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f8ff; /* Cor de fundo azul claro */
        }

        .container {
            text-align: center;
            background-color: #fff; /* Cor de fundo branca para a div */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra */
        }

        h2 {
            margin-top: 0;
        }

        .qr-code {
            background-color: #f0f8ff; /* Cor de fundo azul claro para a div */
            padding: 20px; /* Espaçamento ao redor da imagem */
            border-radius: 10px;
        }

        img {
            max-width: 100%;
        }

        .user-info {
            margin-top: 20px;
            text-align: left;
        }

        .user-info p {
            margin: 5px 0;
        }

        .back-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>QR Code</h2>
        <div class="qr-code">
            <?php echo '<img src="data:image/png;base64,' . base64_encode($qrCodeImage) . '" alt="QR Code">'; ?>
        </div>
        <div class="back-button">
            <button onclick="window.history.back();">Voltar</button>
        </div>
    </div>
</body>
</html>