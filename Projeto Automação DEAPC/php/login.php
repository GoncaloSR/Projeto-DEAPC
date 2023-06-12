<?php
// Verifica se o usuário e a senha estão corretos (você precisa implementar sua lógica de autenticação aqui)
$username = $_POST["username"];
$password = $_POST["password"];

if (($username == "usuario1" && $password == "senha1")) {
    $_SESSION["username"] = $username;
    header("Location: pagina1.php");
    exit();
} elseif (($username == "usuario2" && $password == "senha2")) {
    $_SESSION["username"] = $username;
    header("Location: pagina2.php");
    exit();
} elseif (($username == "usuario3" && $password == "senha3")) {
    $_SESSION["username"] = $username;
    header("Location: pagina3.php");
    exit();
} else {
    $login_error = "Usuário ou senha inválidos";
}

?>

