<?php
$n=$_POST['n']; // tabla del n = {1,2,3,4,5,6,7,8,9,10}
$opcion=$_POST['opcion'];
$m=$_POST['m']; // hasta m = {10, 20, 100, 300}
// hacer una tabla de multiplicar del n hasta el m en php
//echo $n.' '.$opcion.' '.$m;
echo "<table>";
if ($opcion == '+') {
    for ($i = 1; $i <= $m; $i++) {
        echo "<tr>";
        echo "<td>" . $n . "</td>"; // Imprime el valor de $n en una columna
        echo "<td>+</td>"; // Imprime el signo de suma en una columna
        echo "<td>" . $i . "</td>"; // Imprime el valor de $i en una columna
        echo "<td>=</td>"; // Imprime el signo igual en una columna
        echo "<td>" . ($n * $i) . "</td>"; // Imprime el resultado en una columna
        echo "</tr>";
    }
}
if ($opcion == '-') {
    for ($i = 1; $i <= $m; $i++) {
        echo "<tr>";
        echo "<td>" . $n . "</td>"; // Imprime el valor de $n en una columna
        echo "<td>-</td>"; // Imprime el signo de resta en una columna
        echo "<td>" . $i . "</td>"; // Imprime el valor de $i en una columna
        echo "<td>=</td>"; // Imprime el signo igual en una columna
        echo "<td>" . ($n - $i) . "</td>"; // Imprime el resultado en una columna
        echo "</tr>";
    }
}
if ($opcion == '*') {
    for ($i = 1; $i <= $m; $i++) {
        echo "<tr>";
        echo "<td>" . $n . "</td>"; // Imprime el valor de $n en una columna
        echo "<td>*</td>"; // Imprime el signo de multiplicacion en una columna
        echo "<td>" . $i . "</td>"; // Imprime el valor de $i en una columna
        echo "<td>=</td>"; // Imprime el signo igual en una columna
        echo "<td>" . ($n * $i) . "</td>"; // Imprime el resultado en una columna
        echo "</tr>";
    }
}
if ($opcion == '/') {
    for ($i = 1; $i <= $m; $i++) {
        echo "<tr>";
        echo "<td>" . $n . "</td>"; // Imprime el valor de $n en una columna
        echo "<td>/</td>"; // Imprime el signo de division en una columna
        echo "<td>" . $i . "</td>"; // Imprime el valor de $i en una columna
        echo "<td>=</td>"; // Imprime el signo igual en una columna
        echo "<td>" . ($n / $i) . "</td>"; // Imprime el resultado en una columna
        echo "</tr>";
    }
}
echo "</table>";
?>