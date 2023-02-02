<?php 
    require_once ("conexao.php");
    
    $usuario = $_SESSION['usuariologin'];
    
    $sql = "SELECT * FROM `comentarios` ORDER BY id desc"; //WHERE login = '$usuario' modificação so pro usuario logado
    $texto = mysqli_query($link, $sql); 
// $link->query($sql); se der problema tenta essa query
?>
        
    
        
    