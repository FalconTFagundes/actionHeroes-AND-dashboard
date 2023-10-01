<?php
session_start(); // Inicie a sessão

// Destrua todas as variáveis de sessão
session_destroy();

// Redirecione o usuário para a página de login ou para a página inicial
header('Location: index.php'); // Substitua 'login.php' pelo URL da página para a qual você deseja redirecionar após o logout
exit;
?>