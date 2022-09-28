<?php
session_unset();
?>
<html>
 <head>
  <title>Css</title>
 </head>
 <body>
    <div style="background-color: <?= $_COOKIE["color"]?>;font-family: <?=  $_COOKIE["fuente"]?>;font-size: <?= $_COOKIE["tamanyo"]?>;">
        <p>Este es tu css propio</p>
    </div>
    <?php include "Ejercicio2.php";?>
 </body>
</html>
