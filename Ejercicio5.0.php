<?php
session_unset();
$color = $_POST['color'];
$fuente = $_POST['fuente'];
$tamanyo = $_POST['tamanyo'];
setcookie("color",$color,time()+600);
setcookie("fuente",$fuente,time()+600);
setcookie("tamanyo",$tamanyo,time()+600);
?>
<html>
 <head>
  <title>Cookie</title>
 </head>
 <body>
  <a href="Ejercicio5.1.php">Ver tu propio css con Cookie</a>
  <?php include "Ejercicio2.php";?>
 </body>
</html>
