<?php 
    require_once ("conexao.php");

    $login = $_POST['login'];
    $senha = $_POST['senha'];  
    $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
    $select =  mysqli_query($link, $query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['login'];

    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>
        alert('O campo login deve ser preenchido');window.location.href='
        coisitas.php';</script>";
    
        }else{
          if($logarray == $login){
    
            echo"<script language='javascript' type='text/javascript'>alert('Esse login ja existe');window.location.href='coisitas.php';</script>";
            die();
    
          }else{
            $query = "INSERT INTO usuarios (id, nivel, login, senha, aniver, email, bio) VALUES (null, 1, '$login', MD5('$senha'), null, null, null)";
            $insert = mysqli_query($link, $query);
            
            if($insert){
              echo "<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='coisitas.php'</script>";  
              $sql2 = "INSERT INTO `imagens` VALUES (null, '$login', 'padrao.png');";
              mysqli_query($link, $sql2);
            }else{
              echo"<script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar esse usuario');window.location.href='coisitas.php'</script>";
            }
          }
        }