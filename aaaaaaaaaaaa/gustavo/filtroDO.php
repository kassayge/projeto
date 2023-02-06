<?php
require_once ('conexao.php');

$nome = $_POST['usuario']

$sql = "SELECT `id`, `login`, `texto`, `data` FROM `comentarios` WHERE login = '$nome';";
$texto = mysqli_query($link, $sql);
?>