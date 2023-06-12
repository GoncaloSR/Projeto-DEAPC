<?php
session_start(); // Inicia a sessão
session_destroy(); // Destroi a sessão
header("Location: login.php");
exit();
?>
