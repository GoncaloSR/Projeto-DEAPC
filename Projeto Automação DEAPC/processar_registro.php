<?php
// Recebe os dados do formulário de registro
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

echo $nome . $email . $senha;

// Conectar ao banco de dados SQLite
$db = new SQLite3('entrada.db');

// Verifica se a conexão foi estabelecida corretamente
if (!$db) {
    die("Erro ao conectar ao banco de dados: " . $db->lastErrorMsg());
}

// Inserir os dados na tabela de registro
$query = "INSERT INTO Entradas (nome, senha, email) VALUES ('$nome', '$senha', '$email')";
$resultado = $db->exec($query);

// Verificar se o registro foi inserido com sucesso
if (!$resultado) {
    echo "Erro ao registrar o usuário: " . $db->lastErrorMsg();
    exit;
}

// Verifica se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário de login
    $nomeLogin = $_POST["nome"];
    $senhaLogin = $_POST["senha"];

    // Verifica as credenciais no banco de dados
    $queryLogin = "SELECT * FROM Entradas WHERE email = :nome AND senha = :senha";
    $stmt = $db->prepare($queryLogin);
    $stmt->bindValue(':nome', $nomeLogin);
    $stmt->bindValue(':senha', $senhaLogin);
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

// Fechar a conexão com o banco de dados
$db->close();
?>


