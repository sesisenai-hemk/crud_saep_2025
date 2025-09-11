<?php
include_once('../config/bd.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma</title>
</head>

<body>
    <h3>
        Bem-vindo,
        <?php
        echo $_SESSION['nome'];
        ?>!

        <a href="sair.php">
            <input type="button" value="sair" event="sair.php">
        </a>

        <br>
        <br>

        <h2>Turmas</h2>

        <br>

        <a href="cadastrar.php">
            <input type="button" value="cadastrar" event="cadastrar.php">
        </a>

        <br>

        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("listar_turmas.php");
                        echo "<tr>";
                        echo '<td>' . '</td>';
                        echo '<td>' . '</td>';
                        echo '<td><a href="edit.php?id=' . '"> Editar </a></td>';
                        echo '<td><a href="delete.php?id=' . '" onClick="return confirm(\'Tem certeza que deseja deletar?\')"> Deletar </a></td>';
                        echo "</tr>";
                ?>
            </tbody>
        </table>
    </h3>
</body>

</html>