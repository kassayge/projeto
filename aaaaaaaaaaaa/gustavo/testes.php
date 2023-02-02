<?php
include "base.php";
include "textoDO.php"
?>

<body class="testes">

    <div class="testleft">
        <form method="POST" action="testesDO.php" id='texto'>
            <label>comentário</label>
            <br>
            <textarea class='campo' placeholder="insira um texto de até 300 letras" type="text" name="texto" id="texto"></textarea>
            <br>
            <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['usuariologin'];?>">
            <input type="submit" value="enviar" id="enviar" name="enviar" class="inputC">
        </form>
    </div>
    <div class="testright">
        <p>
        <?php
            while($exibir = mysql_fetch_array($texto)){
                echo $exibir['login'];
                echo "</br>";
                echo $exibir['texto'];
                echo "</br></p>";}
         //if ($texto->num_rows > 0) {
                    // echo"
                    //     <table class='texto'>
                    //         <thead>
                    //             <tr>
                    //                 <th>Usuario</th>   
                    //                 <th>Comentário</th>
                    //             </tr>
                    //         </thead>";
                    // echo "<tbody class='tab'>";
                    
            // while($row = $texto->fetch_assoc()) {
                    // echo "
                    //         <tr> <br>
                    //             <td class='aa'>".$row['login']."</td>
                    //             <td>".$row['texto']."</td>
                    //         </tr>";
                                    //  }
                    // echo "</tbody>
                    // </table>";        
                    
        //  } else {
        //      echo "Sem Registro.";
        //  }
        ?>

    </div>
</body>

</html>
