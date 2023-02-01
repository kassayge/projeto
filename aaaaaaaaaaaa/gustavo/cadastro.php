<?php 
    require_once ("conexao.php");

    $login = $_POST['login'];
    $senha = $_POST['senha'];  
    $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
    $sql = "INSERT INTO `usuarios` VALUES (null, 1, '$login', MD5('$senha'))";
    $sql2 = "INSERT INTO `imagens` VALUES (null, '$login', 'padrao.png');";
    $select =  mysqli_query($link, $query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['login'];

    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>
        alert('O campo login deve ser preenchido');window.location.href='
        coisitas.php';</script>";
    
        }else{
          if($logarray == $login){
    
            echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='coisitas.php';</script>";
            die();
    
          }else{
            $query = "INSERT INTO usuarios (id, nivel, login, senha) VALUES (null, 1, '$login', MD5('$senha'))";
            $insert = mysqli_query($link, $query);
            
    
            if($insert){
              echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='coisitas.php'</script>";
              $im = mysqli_query($link, $sql2);
            }else{
              echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='coisitas.php'</script>";
            }
          }
        }

    // if ($link->query($sql) === TRUE) {
    //     echo "<script>window.location='coisitas.php';alert('Cadastro efetuado com sucesso!');</script>";
    // }
    // else{
    //     echo "<script>window.location='coisitas.php';alert('houve erro ao cadastrar tente novamente mais tarde');</script>";
    // }