<?php
    require "../config/bd.php";
    session_start();

    if (isset($_SESSION["email"])) {
        header("location: turma.php");
        exit;
    }
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h1> LOGIN - SAEP </h1>
    <form method="POST" action="">
        <label> Email: </label>
        <input type="text" name="email" required> <br>

        <label> Senha: </label>
        <input type="password" name="senha" required> <br>

        <button type="submit" name="login">Entrar</button>
    </form>
</body>
</html>