<?php
include_once 'func/func.php';
include_once 'config/conexao.php';
include_once 'config/constantes.php';

// Inicie a sessão
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    $conn = conectarAoBanco();

   
    if (!$conn) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    
    $query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conn, $query);

    // Verifique se a consulta SQL foi bem-sucedida
    if (!$result) {
        $_SESSION['login_error'] = "Erro na consulta SQL: " . mysqli_error($conn);
        header('Location: login.php'); // Redirecionar para a página de login
        exit;
    }

    // Verifique se as credenciais estão corretas
    if (mysqli_num_rows($result) == 1) {
        // Credenciais corretas, redirecione para a página principal (index.php)
        header('Location: index.php');
        exit; // Certifique-se de sair após o redirecionamento
    } else {
        // Credenciais incorretas, armazene a mensagem de erro na variável de sessão
        $_SESSION['login_error'] = "Senha ou e-meil incorretosn tente novamente";
        header('Location: login.php'); // Redirecionar para a página de login
        exit;
    }

    // Lembre-se de fechar a conexão quando não precisar mais dela
    mysqli_close($conn);
}  else {
    // Redirecionar de volta para a página de login se os campos estiverem vazios
    header('Location: login.php');
    }
?>
