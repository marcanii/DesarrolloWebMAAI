<?php
include('operaciones.php');
session_start();

if (isset($_SESSION['op'])){
    echo "La division es: ".$_SESSION['op']->dividir();
}
else{
    echo "No hay valores que sumar";
}
?>

<meta http-equiv="refresh" content="3;url=menu.html">