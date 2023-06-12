<?php
session_start(); // Inicia a sessão

if (!isset($_SESSION["username"]) || $_SESSION["username"] !== "usuario1") {
    // Se o usuário não estiver autenticado ou não for o usuário1, redireciona para a página de login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página 1 Protegida</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION["username"]; ?></h2>
    <p>Este é o conteúdo da página 1 protegida.</p>
    <a href="logout.php">Sair</a>
</body>
</html>
