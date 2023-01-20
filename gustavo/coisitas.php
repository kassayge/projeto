<?php

include "base.php";
?>

<title>cadastro</title>

<body class="coisitas">
    <div class="coisita">
        <form method="POST" action="cadastro.php" >
        <label>login<label><input class='campo' type="text" name="login" id="login"><br>
        <label>senha</label><input class='campo' type="password" name="senha" id="senha"><br>
        <input type="submit" value="cadastrar" id="Cadastrar" name="cadastrar">
        </form>
    </div>
    <div class="form">
        <form method="POST" action="validacao.php">
        <label>login </labe><input type="text" name="login" placeholder="login" required autofocus><br>
        <label>senha </label><input type="password" name="senha" placeholder="senha" required><br>
        <input type="submit" value="entrar" id="entrar" name="entrar">
        </form>
    </div>
</body>
    
</html>