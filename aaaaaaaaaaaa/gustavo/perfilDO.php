<?php
include "conexao.php";
session_start();

$uploaddir = './static/perfil_img/'; 

$img = $_FILES['userfile']['name'];
$usu = $_SESSION['usuariologin'];
$sql = "INSERT INTO `imagens`(`id`, `login`, `img`) VALUES (null, '$usu', '$img')";
$envio = mysqli_query($link, $sql);

if($envio){
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $_FILES['userfile']['name']) 
    echo "<script>window.location='index.php';alert('imagem de perfil enviada com sucesso');</script>";
    
   }else {
    echo "<script language='javascript' type='text/javascript'>alert('falhou:c');window.location.href='perfil.php'</script>";
}
?>

