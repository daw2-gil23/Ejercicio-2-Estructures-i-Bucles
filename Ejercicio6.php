<?php
session_start();
$mypage = 'Ejercicio6.php';
if (!isset($_SESSION['refresher']))    {
    $_SESSION['refresher'] = 0;
}
else    {
$_SESSION['refresher']++;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="refresh" content="10">
<title>Refresher</title>
</head>

<body>
<p><?php echo $_SESSION['refresher']+1; ?> veces ha entrado</p>
</body>
</html>
