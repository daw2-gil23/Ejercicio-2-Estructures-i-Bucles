<?php
session_unset();
?>
<html>
 <head>
  <title>Eligue tu css</title>
 </head>
 <body>
  <form method="post" action="Ejercicio5.0.php">
   <p>Color texto:
    <input type="text" name="color"/>
   </p>
   <p>La fuente de la letra
    <input type="text" name="fuente"/>
   </p>
   <p>Tamaño letra
    <input type="text" name="tamanyo"/>
   </p>
    <p>
      Dale si quieres guardarlo en una coockie
    <input type="checkbox" name="coockie" />
    </p>
    <input type="submit" name="submit" value="Submit"/>
    </form>
  <?php include "Ejercicio2.php";?>
 </body>
</html>