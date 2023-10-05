<?php
session_start();
include_once 'func/func.php';
include_once 'config/conexao.php';

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conn = conectarAoBanco();

    if (!$conn) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        $_SESSION['login_error'] = "Erro na consulta SQL: " . mysqli_error($conn);
    } elseif (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['usuario_id'] = $row['id'];
        $_SESSION['papel'] = $row['papel'];
        $_SESSION['nome_usuario'] = $row['nome'];
        header('Location: index.php'); // Redirecione para a página principal após o login bem-sucedido
        exit;
    } else {
        $_SESSION['login_error'] = "Credenciais incorretas";
    }

    mysqli_close($conn);
}

header('Location: login.php'); // Redirecione para a página de login em todos os outros casos
exit;


