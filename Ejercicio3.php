<html>
 <head>
  <title>Tiempo</title>
 </head>
 <body>
    <?php include "Ejercicio2.php";

    if(date("m")>=6 and date("m")<=9 ){
        echo("¡Buen verano!");
    }
    if(date("m")>=12 and date("m")<=3 ){
        echo("¡Buen invierno!");
    }
    ?>
  </form>
 </body>
</html>
