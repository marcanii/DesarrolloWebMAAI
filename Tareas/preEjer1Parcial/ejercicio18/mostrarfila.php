<?php
include("estante.php");
session_start();
$fila = $_GET["valor"];

if (isset($_SESSION['estante'])){
    $_SESSION["estante"]->mostrarFila($fila);
}
else{
    echo "Error";
}
?>

<meta http-equiv="refresh" content="3; url=menu.html">