<?php 
    require_once ("conexao.php");

    $name = $_POST['pesquisar'];

    $sql = "SELECT * FROM `comentarios` ORDER BY id desc"; //WHERE login = '$usuario' modificação so pro usuario logado
    $filtro = "SELECT * FROM `comentarios` WHERE login LIKE '%$name%' ORDER BY id desc";

    if($name != ""){
    $texto = mysqli_query($link, $filtro);
    
    }else{
    $texto = mysqli_query($link, $sql);

    }
?>