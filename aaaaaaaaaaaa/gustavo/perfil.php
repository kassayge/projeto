<?php
include "base.php";
?>

<body class="sobre"> 

    <form enctype="multipart/form-data" action="perfilDO.php" method="POST">

        <div class='img'>
            <label for='file'>adicione sua foto de perfil</label>
            <input name="userfile" type="file" id='file' class='perfilA' accept=".jpg, .png" /> 
            <input type="submit" value="Enviar" accept=".jpg .png" class='inputB'/>
        </div>
    </form>  
</body>
</html>