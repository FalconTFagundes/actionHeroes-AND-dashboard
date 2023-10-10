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

    // Consulta preparada para evitar SQL Injection
    $query = "SELECT idusuario, nome, sobrenome, papel FROM usuario WHERE email = ? AND senha = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
            mysqli_stmt_bind_result($stmt, $usuario_id, $nome, $sobrenome, $papel);
            mysqli_stmt_fetch($stmt);

            // Defina as variáveis de sessão
            $_SESSION['usuario_id'] = $usuario_id;
            $_SESSION['papel'] = $papel;
            $_SESSION['nome_usuario'] = $nome;
            $_SESSION['sobrenome_usuario'] = $sobrenome;
            $_SESSION['email_usuario'] = $email;

            $_SESSION['usuario_logado'] = true;

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            header('Location: index.php'); // Redirecione para a página principal após o login bem-sucedido
            exit;
        } else {
            $_SESSION['login_error'] = "Credenciais incorretas";
        }
    } else {
        $_SESSION['login_error'] = "Erro na consulta SQL: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

header('Location: login.php'); // Redirecione para a página de login em todos os outros casos
exit;
?>
