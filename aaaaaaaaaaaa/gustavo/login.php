<?php
session_start();    
require_once("conexao.php");    

if((isset($_POST['login'])) && (isset($_POST['senha']))){
    $usuario = mysqli_real_escape_string($link, $_POST['login']); 
    $senha = mysqli_real_escape_string($link, $_POST['senha']);
    $senha = MD5($senha);
    
    $result_usuario = "SELECT * FROM usuarios WHERE login = '$usuario' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($link, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    
    if(isset($resultado)){
        $_SESSION['usuarioId'] = $resultado['id'];
        $_SESSION['usuariologin'] = $resultado['login'];
        //$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
        // if($_SESSION['usuarioNiveisAcessoId'] == "1"){
        //     header("Location: administrativo.php");
        // }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
        //     header("Location: colaborador.php");
        //}else{
            header("Location: coisitas.php");
        //}
    
    }else{    
        
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: coisitas.php");
        echo "<script>window.location='coisitas.php';alert('senha ou login errado');</script>";
    }

}else{
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: coisitas.php");
    echo "<script>window.location='coisitas.php';alert('houve erro ao entrar no seu login, tente novamente mais tarde');</script>";
}
?>