<html>
<head>
<title>Tiempo</title>
</head>
<body>
<?php
$fecha_actual = date("d-m-Y");
echo "Hoy es ";
echo date("d-m-Y");
echo "<br>";
echo "Hace dos dias era ";
echo date("d-m-Y",strtotime($fecha_actual."- 2 days"));
echo "<br>";
echo "El proximo mes sera ";
echo date("F",strtotime($fecha_actual."+ 1 month"));

function hasta_final_mes(){
    $total_mes = cal_days_in_month(CAL_GREGORIAN,date("m"),date("Y"));

    $llevamos = date("d");

    return $total_mes - $llevamos;
}

echo "<br>";
echo " Falta estos dias para el siguiente mes ".hasta_final_mes(). " dias.";

//- 31536000

echo "<br>";
$firstDate = date("d-m-Y");
$secondDate = "2022-12-31";

$dateDifference = abs(strtotime($secondDate) - strtotime($firstDate));

$years  = floor($dateDifference / 31536000);
$months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
$days   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));

 echo "Falta " .$years." anyo,  ".$months." meses y ".$days." dias para anyo nuevo";



?>
</body>
</html>

