<?php
include "base.php";
?>

<body class="sobre">
    <div class='img'>
        <form enctype="multipart/form-data" action="perfilDO.php" method="post">
             <input name="userfile" type="file" id='file' class='perfilA'/> <!-- <label for='file' class='perfil'>selecione uma imagem para o seu perfil</label> -->
            <br>
            <input type="submit" value="Enviar" accept=".jpg .png" class='inputB'/>
        </form>
    </div> 
</body>
</html>