<?php
include('operaciones.php');
session_start();
$a = $_GET['a'];
$b = $_GET['b'];

$_SESSION['op'] = new Operaciones($a, $b);

?>

<meta http-equiv="refresh" content="3;url=menu.html">