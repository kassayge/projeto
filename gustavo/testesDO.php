<?php 
    require_once ("conexao.php");
    
    $usuario = $_POST['usuario'];
    $texto = $_POST['texto'];
    $data = date('Y/m/d');



    if($usuario != '' && $texto != ''){    
        $query = "INSERT INTO `comentarios`(`id`, `login`, `texto`, `data`) VALUES (null ,'$usuario','$texto','$data')";
        echo "<script>window.location='testes.php';alert('texto enviado com sucesso!');</script>";
        return mysqli_query($link,$query);
    }else{
        echo "<script>window.location='testes.php';alert('texto não foi enviado, tente novamente mais tarde');</script>";
        return false;
    }
   
