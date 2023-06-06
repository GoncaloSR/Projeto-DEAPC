<?php
$db = new SQLite3('entrada.db');

// Criação da tabela Entradas
$db->exec("CREATE TABLE IF NOT EXISTS Entradas(id INTEGER PRIMARY KEY, email TEXT, senha TEXT)");
$db->exec("INSERT INTO Entradas(email, senha) VALUES('diretor@megachips.pt', 'Dir2023')");
$db->exec("INSERT INTO Entradas(email, senha) VALUES('engenharia@megachips.pt', 'Eng2023')");
$db->exec("INSERT INTO Entradas(email, senha) VALUES('operador@megachips.pt', 'Ope2023')");

echo "<h3>Tabela de Entradas</h3>";
$sql = "SELECT * FROM Entradas";
$result = $db->query($sql);

echo "<table>\n<th>Id</th><th>Email</th><th>Senha</th>\n";
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['email'] . "</td><td>" . $row['senha'] . "</td></tr>\n";
}
echo "</table>";

unset($db);
?>
