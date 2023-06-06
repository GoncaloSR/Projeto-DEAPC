
<?php
// Recebe os dados do formulário
/*
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Aqui pode-se adicionar a lógica para armazenar os dados em um banco de dados ou fazer qualquer outra ação necessária

// Exemplo de exibição dos dados cadastrados
echo "Nome: " . $nome . "<br>";
echo "Email: " . $email . "<br>";
echo "Senha: " . $senha . "<br>";
?>*/
//...
// Obter os valores enviados pelo formulário
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

// Conectar ao banco de dados
$conexao = mysqli_connect('http://localhost/Projeto-DEAPC/register.html', 'root', '', 'bancoregisto');

// Verificar se a conexão foi estabelecida corretamente
if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Inserir os dados na tabela
$query = "INSERT INTO usuarios (nome, senha, email) VALUES ('$nome', '$senha', '$email')";
$resultado = mysqli_query($conexao, $query);

// Verificar se o registro foi inserido com sucesso
if ($resultado) {
    echo "Registro realizado com sucesso!";
} else {
    echo "Erro ao registrar o usuário: " . mysqli_error($conexao);
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>



