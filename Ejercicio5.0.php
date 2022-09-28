<?php
    session_unset();
    if (isset($_POST['coockie'])){
        $coockie = $_POST['coockie'];
    }
    else{
        $coockie = 0;
    }
    $color = $_POST['color'];
    $fuente = $_POST['fuente'];
    $tamanyo = $_POST['tamanyo'];
    setcookie("color",$color,time()+600);
    setcookie("fuente",$fuente,time()+600);
    setcookie("tamanyo",$tamanyo,time()+600); 
    $colorp = $_POST['color'];
    $fuentep = $_POST['fuente'];
    $tamanyop = $_POST['tamanyo']
?>


<?php if ($coockie==true): ?>
    <html>
        <head>
        <title>Cookie</title>
        </head>
        <body>
        <a href="Ejercicio5.1.php">Ver tu propio css con Cookie</a>
        <?php include "Ejercicio2.php";?>
        </body>
    </html>
    </body>
    </html>
<?php endif; ?>
<?php if ($coockie==0): ?>
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
 <?php endif; ?>
