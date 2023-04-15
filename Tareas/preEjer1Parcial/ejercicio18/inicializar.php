<?php
include("estante.php");
session_start();
$tope1 = $_GET['a'];
$tope2 = $_GET['b'];
$tope3 = $_GET['c'];

$_SESSION["estante"] = new estante($tope1, $tope2, $tope3);
echo 'Valores iniciados';
?>

<meta http-equiv="refresh" content="2; url=menu.html">