<?php
include('utiles.php');
$cadena = $_GET['cadena'];
$n = $_GET['n'];

$obj = new utiles($cadena);
$obj->aumentarguiones($n);
?>