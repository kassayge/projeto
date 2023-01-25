<?php

include "base.php";
?>

<title>cadastro</title>

<body class="coisitas">
    <div class="coisita">
        <form method="POST" action="cadastro.php" class='ll'>
        <label class='label'>login<label><br><input class='campo' type="text" name="login" id="login"><br>
        <label class='label'>senha</label><br><input class='campo' type="password" name="senha" id="senha"><br>
        <input type="submit" value="cadastrar" id="Cadastrar" name="cadastrar" class='inputA'>
        </form>
    </div>
    <div class="form">
        <form method="POST" action="login.php" class='ll'>
        <label class='label'>login </labe><br><input type="text" name="login" class='txt' required autofocus><br>
        <label class='label'>senha </label><br><input type="password" name="senha" class='txt' required><br>
        <input type="submit" value="entrar" id="entrar" name="entrar" class='input'> 
        </form>
    </div>
</body>
    
</html>