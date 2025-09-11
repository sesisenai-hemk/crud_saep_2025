<?php
require_once("../config/bd.php");

$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["cadastrar"])) { //verifica se o botão foi clicado
            $nome = trim($_POST["nome"] ?? ""); //evita espaços vazios
            $professor = trim($_POST["professor"] ?? "");

            //Código 
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de turma </title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h1> Registro de turma </h1>
    <form>
        <label> Nome da turma </label>
        <input type="text" name="nome" required >

        <label> Professor responsável </label>
        <input type="text" name="professor" required >

        <button type="submit" name="cadastrar"> Cadastrar </button>
        
        <?php
        if($erro) {
                echo " $erro ";
            }
            if(isset($mensagem)) {
                echo " $mensagem ";
            }
            ?>

    </form>
</body>
</html>