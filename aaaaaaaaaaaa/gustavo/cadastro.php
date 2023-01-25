<?php 
    require_once ("conexao.php");


    $login = $_POST['login'];
    $senha = $_POST['senha']; 
    
    $sql = "INSERT INTO `usuarios` VALUES (null, '$login', MD5('$senha'))";

    if ($link->query($sql) === TRUE) {
        echo "<script>window.location='coisitas.php';alert('Cadastro efetuado com sucesso!');</script>";
    }
    else{
        echo "<script>window.location='coisitas.php';alert('houve erro ao cadastrar tente novamente mais tarde');</script>";
    }