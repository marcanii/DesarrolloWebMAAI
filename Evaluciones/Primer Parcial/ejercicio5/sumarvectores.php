<?php
session_start();
include("sumar.php");
$n=$_SESSION["n"];
$arr1 = $_GET["valor1"];
$arr2 = $_GET["valor2"];

$resultado = sumarvec($arr1, $arr2, $n);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Primer parcial</title>
</head>
<body>
    <form action="">
    <?php
    for ($i=0;$i<$n;$i++){
        echo "Resultado <input type='number' value='".$resultado[$i]."'><br>";
    }
    ?>
    <br>
    </form>
    
</body>
</html>