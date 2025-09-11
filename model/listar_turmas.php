<?php
require_once ("../config/bd.php");

$sql = "SELECT * FROM turmas WHERE id_turma = 1";
$resultado = $conexao->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    $turmas = $resultado->fetch_all(MYSQLI_ASSOC);

} else {
    echo "<div> Não há turmas cadastradas! </div>";
}

$resultado->free();
$conexao->close();

?>