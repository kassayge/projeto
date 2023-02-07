<?php 
require_once ("conexao.php");

$sql = "SELECT * FROM `comentarios` ORDER BY id desc"; //WHERE login = '$usuario' modificação so pro usuario logado
$texto = mysqli_query($link, $sql);

?>   
