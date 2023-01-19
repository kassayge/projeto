<?php
include "base.php";
require_once "testesDO.php";
?>

<body class="testes">
    <div class="div">
    <?php 
    if ($teste->num_rows > 0) {
        while($row = $teste->fetch_assoc()) {
            echo $row['id']. "  ". $row['nome']. '</br>';

        }
    }
    
    ?>
    </div>
</body>
</html>