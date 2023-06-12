<?php
session_start(); // Inicia a sessão

if (!isset($_SESSION["username"])) {
    // Se o usuário não estiver autenticado, redireciona para a página de login
    header("Location: login.php");
    exit();
}

// Aqui você pode exibir o conteúdo da página protegida
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Protegida</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION["username"]; ?></h2>
    <p>Este é o conteúdo da página protegida.</p>
    <a href="logout.php">Sair</a>
</body>
</html>
