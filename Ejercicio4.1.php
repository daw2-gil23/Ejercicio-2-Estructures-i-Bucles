<?php
$color = $_POST['color'];
$fuente = $_POST['fuente'];
$tamanyo = $_POST['tamanyo'];
?>
<html>
 <head>
  <title>Css</title>
 </head>
 <body>
    <div style="background-color: <?= $color?>;font-size: <?= $tamanyo?>;font-size: <?= $tamanyo?>;">
        <p>Este es tu css propio</p>
    </div>
    <?php include "Ejercicio2.php";?>
 </body>
</html>

