<?php
include "base.php";
require_once "testesDO.php";
?>

<body class="testes">
    <div class="test">
    <form method="POST" action="testesDO.php" id='texto'>
        <label>comentário</label>
        <br>
        <textarea class='campo' placeholder="insira um texto de até 300 letras" type="text" name="texto" id="texto"></textarea>
        <br>
        <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['usuariologin'];?>">
        <input type="submit" value="enviar" id="enviar" name="enviar" class="inputC">
    </form>
     <?php 
    // if ($teste->num_rows > 0) {
    //     while($row = $teste->fetch_assoc()) {
    //         echo $row['id']. "  ". $row['login']. '</br>';

    //     }
    // }
    ?> 
    </div>
</body>
</html>