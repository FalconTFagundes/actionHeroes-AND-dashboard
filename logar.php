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
?>

    } else {
        // Credenciais incorretas, redirecione de volta para a página de login com uma mensagem de erro
        $_SESSION['login_error'] = "Credenciais incorretas";
        header('Location: login.php');
        exit;
    }
} elseif (isset($_POST['cadastro_submit']) && !empty($_POST['cadastro_email']) && !empty($_POST['cadastro_senha'])) {
    $cadastro_email = $_POST['cadastro_email'];
    $cadastro_senha = $_POST['cadastro_senha'];

    $conn = conectarAoBanco();

    if (!$conn) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Verifique se o email já existe no banco de dados
    $check_query = "SELECT * FROM usuario WHERE email = '$cadastro_email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // Email já existe, exiba uma mensagem de erro
        $_SESSION['cadastro_error'] = "O email já está cadastrado.";
        header('Location: cadastro.php'); // Redirecionar para a página de cadastro
        exit;
    }

    // Se o email não existe, insira os dados do novo usuário no banco de dados
    $insert_query = "INSERT INTO usuario (email, senha) VALUES ('$cadastro_email', '$cadastro_senha')";
    $insert_result = mysqli_query($conn, $insert_query);

    if (!$insert_result) {
        $_SESSION['cadastro_error'] = "Erro ao cadastrar o usuário: " . mysqli_error($conn);
        header('Location: cadastro.php'); // Redirecionar para a página de cadastro
        exit;
    }

    // Cadastro bem-sucedido, redirecione para a página de login
    $_SESSION['cadastro_success'] = "Cadastro realizado com sucesso. Faça o login agora.";
    header('Location: login.php');
    exit;
} else {
    // Redirecionar de volta para a página de login se os campos estiverem vazios ou
    // para a página de cadastro se nenhum formulário for enviado
    header('Location: login.php');
    exit;
}
?>
