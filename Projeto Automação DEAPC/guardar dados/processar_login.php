<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica se o usuário e senha estão corretos (exemplo simplificado)
    if ($username === "usuario" && $password === "senha") {
        // Login bem-sucedido
        echo "Login realizado com sucesso!";
    } else {
        // Login falhou
        echo "Usuário ou senha incorretos!";
    }
}
?>
