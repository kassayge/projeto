<?php 
    require_once ("conexao.php");
    
    $usuario = $_POST['usuario'];
    $texto = $_POST['texto'];
    
    // $sql = "INSERT INTO `comentarios` VALUES (null, '$usuario', '$texto')";

    if($usuario != '' && $texto != ''){    
        $query = "INSERT INTO `comentarios`(`id`, `login`, `texto`) VALUES (null ,'$usuario','$texto')";
        echo "<script>window.location='testes.php';alert('texto enviado com sucesso!');</script>";
        return mysqli_query($link,$query);
    }else{
        echo "<script>window.location='testes.php';alert('texto não foi enviado, tente novamente mais tarde');</script>";
        return false;
    }
    // if ($link->query($sql) === TRUE) {
    //     echo "oi";
    // }
    // else{
    //     echo "tchau";
    // }