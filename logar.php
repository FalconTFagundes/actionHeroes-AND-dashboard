
<?php
include_once 'func/func.php';
include_once 'config/constantes.php';
include_once 'config/conexao.php';

// Inicie a sessão
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
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
    // Credenciais corretas, armazene o ID do usuário, o papel e o nome na sessão
    $row = mysqli_fetch_assoc($result);
    $_SESSION['usuario_id'] = $row['id'];
    $_SESSION['papel'] = $row['papel'];
    $_SESSION['nome_usuario'] = $row['nome']; // Adicione o nome do usuário
    // Redirecione para a página principal
    header('Location: index.php');
    exit;
}


if (mysqli_num_rows($result) == 1) {
    // Credenciais corretas, armazene o ID do usuário e o papel na sessão
    $row = mysqli_fetch_assoc($result);
    $_SESSION['usuario_id'] = $row['id'];
    $_SESSION['papel'] = $row['papel'];
    // Redirecione para a página principal
    header('Location: index.php');
    exit;
}

    // Lembre-se de fechar a conexão quando não precisar mais dela
    mysqli_close($conn);
} else {
    // Redirecionar de volta para a página de login se os campos estiverem vazios
    header('Location: login.php');
}

if (mysqli_num_rows($result) == 1) {
    // Credenciais corretas, armazene o ID do usuário e o papel na sessão
    $row = mysqli_fetch_assoc($result);
    $_SESSION['usuario_id'] = $row['id'];
    $_SESSION['papel'] = $row['papel']; // Adicione o papel do usuário
    // Redirecione para a página principal
    header('Location: index.php');
    exit;
}

?>
