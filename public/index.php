<?php
    require "../config/bd.php";
    session_start(); 

    if (isset($_SESSION["email"])) { //verifica se a sessão já está ativa
        header("location: turma.php"); //redireciona para a página
        exit;
    }

    $erro = "";
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["login"])) { //verifica se o botão foi clicado
            $email = trim($_POST["email"] ?? ""); //evita espaços vazios
            $senha = trim($_POST["senha"] ?? "");

           $stmt = $conexao->prepare("SELECT * FROM professor WHERE email_professor = ? AND senha_professor = ? ");
           $stmt -> bind_param("ss", $email, $senha);
           $stmt -> execute();
           $resultado = $stmt->get_result();

           if  ($resultado->num_rows === 1) {
                $dados = $resultado->fetch_assoc();

                $_SESSION['email'] = $dados['email_professor'];
                $_SESSION['nome'] = $dados['nome_professor'];

                header("location: turma.php");
                exit;
            } else {
                $erro = "Usuário ou senha inválidos";
            }
        }
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
        <?php
            if($erro) {
                echo "<div> $erro </div>";
            }
        ?>
    </form>
</body>
</html>