<?php
include "conexao.php";
session_start();

$uploaddir = './static/perfil_img/'; 
$uploadfile = $uploaddir. basename($_FILES['userfile']['name']);

$img = $_FILES['userfile']['name'];
//rename($img, 'avatar-'. $_SESSION['usuariologin']);
$usu = $_SESSION['usuariologin'];
$sql = "UPDATE `imagens` SET `login` = '$usu', `img` = '$img')";
$envio = mysqli_query($link, $sql);

echo $_FILES['userfile']['name'];
echo $_FILES['userfile']['tmp_name'];

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "deu certo";
} else {
    echo "nao deu";
} 


if($envio){
    //echo "<script>window.location='index.php';alert('imagem de perfil enviada com sucesso');</script>";
    
   }else {
    //echo "<script language='javascript' type='text/javascript'>alert('falhou:c');window.location.href='perfil.php'</script>";
}
?>

