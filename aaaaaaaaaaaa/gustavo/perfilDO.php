<?php
$uploaddir = './static/perfil_img/'; 

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $_FILES['userfile']['name'])) {
    $uploadfile = $uploaddir . $_FILES['userfile']['name'];
    echo "<script>window.location='perfil.php';alert('imagem de perfil enviada com sucesso');</script>";
} else {
   echo "n foi possivel concluir a operação";
}
?>