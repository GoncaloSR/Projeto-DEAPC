<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores da BD
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica credenciais
    if ($username === "usuario" && $password === "senha") {
        echo "Login realizado com sucesso!";
    } else {
        echo "Usuário ou senha incorretos!";
    }
}
?>
