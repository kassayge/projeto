<?php
    session_start();  
    include("conexao.php");    
    if((isset($_POST['login'])) && (isset($_POST['senha']))){
        $login = mysqli_real_escape_string($link, $_POST['login']); 
        $senha = mysqli_real_escape_string($link, $_POST['senha']);
        $senha = md5($senha);
            
        $result_usuario = "SELECT * FROM usuarios WHERE login = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($link, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        if(isset($resultado)){
            $_SESSION['loginId'] = $resultado['id'];
            $_SESSION['loginNome'] = $resultado['login'];
            if($_SESSION['usuarioNiveisAcessoId'] == "1"){
                header("Location: administrativo.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
                header("Location: colaborador.php");
            }else{
            header("Location: coisitas.php");
            
            exit();}
        }else{    
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: coisitas.php");
        }
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: coisitas.php");
    }
?>