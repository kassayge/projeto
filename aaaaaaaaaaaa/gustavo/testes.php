<?php
include "base.php";
include "textoDO.php";
//include "filtroDO.php";
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
        <a href="filtroDO.php"><button>meus comentarios</button></a>
        <?php while($text = mysqli_fetch_array($texto)){
                echo "<div class = 'comper'>";
                echo $text['login']. "<div class='azin'>". $text['data']. "</div>";
                echo $text['texto'];
                echo "</div>";
                echo "<hr>";    
                echo "</br>";           
            }

        //  if ($texto->num_rows > 0) {
        //             echo"
        //                 <table class='texto'>
        //                     <thead>
        //                         <tr>
        //                             <th>Usuario</th>   
        //                             <th>Comentário</th>
        //                         </tr>
        //                     </thead>";
        //             echo "<tbody class='tab'>";
                    
        //     while($row = $texto->fetch_assoc()){
        //             echo "
        //                     <tr> <br>
        //                         <td class='aa'>".$row['login']."</td>
        //                         <td>".$row['texto']."</td>
        //                     </tr>";
        //                              }
        //             echo "</tbody>
        //             </table>";        
                    
        //  } else {
        //      echo "Sem Registro.";
        //  }
        ?>
   </div>
 </body>

 </html>
