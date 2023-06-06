<?php
// Conexão com o banco de dados
$db = new SQLite3('entrada.db');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    // Verifica as credenciais no banco de dados
    $query = "SELECT * FROM Entradas WHERE email = :nome AND senha = :senha";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':senha', $senha);
    $result = $stmt->execute();

    // Verifica se as credenciais são válidas
    if ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        // Credenciais válidas, redireciona para outra página
        header("Location: produto.html");
        exit;
    } else {
        // Credenciais inválidas, redireciona de volta para a página de login com uma mensagem de erro
        header("Location: login.html?erro=1");
        exit;
    }
}

// Fecha a conexão com o banco de dados
$db->close();
?>
