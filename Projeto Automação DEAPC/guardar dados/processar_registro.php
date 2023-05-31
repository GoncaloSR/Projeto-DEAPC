<?php
// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Aqui pode-se adicionar a lógica para armazenar os dados em um banco de dados ou fazer qualquer outra ação necessária

// Exemplo de exibição dos dados cadastrados
echo "Nome: " . $nome . "<br>";
echo "Email: " . $email . "<br>";
echo "Senha: " . $senha . "<br>";
?>
