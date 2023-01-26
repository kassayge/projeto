<?php 
    require_once ("conexao.php");
    
    $usuario = $_POST['usuario'];
    $texto = $_POST['texto'];
    
    $sql = "INSERT INTO `comentarios` VALUES (null, '$usuario', '$texto')";

    if ($link->query($sql) === TRUE) {
        echo "oi";
    }
    else{
        echo "tchau";
    }