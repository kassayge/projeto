<?php
include "conexao.php";
session_start();

$img = $_FILES['userfile']['name'];
$usu = $_SESSION['usuariologin'];
$sql = "UPDATE `imagens` SET `login`='$usu',`img`='$img'";
$envio = mysqli_query($link, $sql);

$uploaddir = './static/perfil_img/'; 
$uploadfile = $uploaddir.$img;

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "deu certo";
    echo "<script>window.location='index.php';alert('imagem de perfil enviada com sucesso');</script>";
} else {
    echo "<script>window.location='testes.php';alert('houve problema ao enviar imagem, tente novamente mais tarde');</script>";
    return false;
}  
?>

