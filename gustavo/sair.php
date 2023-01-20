<?php
    session_start();   
    session_destroy();
    //     $_SESSION['login'],
    //     $_SESSION['Senha']
    // );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    header("Location: index.php");
?>