<?php
include "base.php";
include "textoDO.php";
?>

<body class="testes">

     <div class="testleft">
         <form method="POST" action="testesDO.php" class='texto'>
             <label>comentário</label>
             <br>
             <textarea class='campo' placeholder="insira um texto de até 300 letras" type="text" name="texto" class="texto"></textarea>
             <br>
             <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['usuariologin'];?>">
             <input type="submit" value="enviar" id="enviar" name="enviar" class="inputC">
         </form>
     </div>
     <form action="testes.php" method="post" class="testright1">
       <input type = "text" name = "pesquisar" placeholder="pesquisar de usuario" class="texto">
       <input type = "submit" value = "enviar" class= "logb"> 
       <input type = "submit" value = "limpar" class = "logb">
     </form>
    <div class="testright">
        <?php while($text = mysqli_fetch_array($texto)){
                echo "<div class = 'comper'>";
                echo $text['login']. "<div class='azin'>". $text['data']. "</div>";
                echo $text['texto'];
                echo "</div>";
                echo "<hr>";    
                echo "</br>";           
            }
        ?>
   </div>
 </body>

 </html>
