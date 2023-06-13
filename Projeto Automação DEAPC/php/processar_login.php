<?php

$db = "projetodeapc";
$username = $_POST["username"];
$password = $_POST["password"];

$con = mysqli_connect("localhost", "root", "", $db);

if (!$con) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$sql = "SELECT * FROM utilizadores WHERE Nome='$username' AND Password='$password'";

$utilizador = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($utilizador);
if ($row) {
    $role = $row["Role"];

    if ($role == "diretor") {
        header("Location: ../produto.html");
        exit;
    }

    if ($role == "engenheiro") {
        header("Location: ../engenheiro.html");
        exit;
    }

    if ($role == "operario") {
        header("Location: ../operario.html");
        exit;
    }
} else {
    header("Location: ../login.html");
    exit;
}

mysqli_close($con);
?>