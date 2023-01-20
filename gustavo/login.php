 <?php

require_once 'conexao.php';

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
  if (isset($entrar)) {
    $verifica = mysqli_query($link, "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='coisitas.php';</script>";
        die();
      }else{
         setcookie("login",$login);
         header("Location:base.php");
      }
  }
?> 