<?php 
    require_once ("conexao.php");
    
    $usuario = $_SESSION['usuariologin'];
    
    $sql = "SELECT * FROM `comentarios` WHERE login = '$usuario'";
    $texto = $link->query($sql);

        
    
        
    