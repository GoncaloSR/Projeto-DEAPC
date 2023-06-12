<?php
// Verifica se o usuário e a senha estão corretos (você precisa implementar sua lógica de autenticação aqui)
$username = $_POST["username"];
$password = $_POST["password"];

if (($username == "engenheiro@megachips.pt" && $password == "eng2023")) {
    $_SESSION["username"] = $username;
    header("Location: pagina1.php");
    exit();
} elseif (($username == "diretor@megachips.pt" && $password == "dir2023")) {
    $_SESSION["username"] = $username;
    header("Location: pagina2.php");
    exit();
} elseif (($username == "operador@megachips.pt" && $password == "ope2023")) {
    $_SESSION["username"] = $username;
    header("Location: pagina3.php");
    exit();
} else {
    $login_error = "Usuário ou senha inválidos";
}

?>

