<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores da BD
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    // Verifica credenciais
    if ($username === "nome" && $password === "senha") {
        echo "Login realizado com sucesso!";
    } else {
        echo "Usuário ou senha incorretos!";
    }
}
?>