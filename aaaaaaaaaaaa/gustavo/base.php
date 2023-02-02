<?php
include "conexao.php";
session_start();
$login = $_SESSION['usuariologin'];

$sql = "SELECT `img` FROM `imagens` WHERE login = '$login' ORDER BY id DESC;";
$avatar = $link->query($sql);

if ($avatar->num_rows > 0) {
    while($row = $avatar->fetch_assoc()) {
        $img = $row['img'];
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./static/imagens/favicon.ico" type="image/ico">
    <title>recriando...</title>
    <link rel="stylesheet" href="home.css"/>
</head>
<header>     
    <nav class=navbar> 
        <ul class="ul">
            <a href="index.php"><button class="a">inicio</button></a>  
            <a href="artes.php"><button class="a">artes</button></a>
            <a href="sobre.php"><button class="a">sobre mim</button></a>        
        <!-- </ul> -->
    
        <?php
            if ($_SESSION['usuariologin'] &&  $_SESSION['NiveisAcesso'] == 1) {
                //print("<ul>"); 
                print(" <a href='testes.php'><button class='a' >comentarios</button></a>
                        <div class='log'>
                            <p class='pqp'>
                             $login
                            </p>

                            <img class='perfil' src='./static/perfil_img/$img' alt='foto de perfil'>
                            <br>
                            <a href='perfil.php'><button class='logb'>perfil</button></a>
                            <a href='sair.php'><button class='logb'>Sair</button></a>
                        </div>");
               // print("");
            } else {
                //print(""); 
                print("<a href='coisitas.php'><button class='a'>cadastro e login</button></a>");
                print("</ul>");}
        ?>
    </nav>
</header>



