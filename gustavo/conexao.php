<?php
$server = "bd";
$usuario = "root";
$senha = "Jaison@051689";
$bd = "registro";

$link = mysqli_connect($server, $usuario, $senha, $bd);

if (!$link) {
    echo "Erro: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>