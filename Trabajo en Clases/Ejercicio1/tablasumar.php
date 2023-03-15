<?php
    include('funciones.php');

    $filas = $_GET['num2'];
    $columa = $_GET['num1'];

    tablassumas($filas, $columa);


    /*
    echo "<table>";
    for ($i = $columa; $i <=$columa ; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $filas; $j++) {
        echo "$j + $i = " . ($i + $j) . "<br>";
        }
        echo "</tr>";
    }
    echo "</table>";
    */
?>
