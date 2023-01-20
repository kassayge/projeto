<?php
require_once "conexao.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "INSERT INTO `usuarios` (`login`, `senha`) VALUES ('$login', MD5('$senha'))";

if ($link->query($sql) === TRUE) {
    echo "<script>window.location='index.php';alert('Cadastro efetuado com sucesso!');</script>";
}   else{
    echo "<div class='alerta>algo deu errado, tente novamente mais tarde :(</div>";
}

mysqli_close($link);
?>