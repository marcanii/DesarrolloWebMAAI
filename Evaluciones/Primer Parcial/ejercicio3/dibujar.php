<?php
include("examen.php");
$cadena1 = $_GET["cadena1"];
$cadena2 = $_GET["cadena2"];

$obj = new examen($cadena1, $cadena2);
$obj->cruzar();

?>