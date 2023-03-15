
<?php
    include('funciones.php');

    $a=$_GET['num1'];
    $b=$_GET['num2'];
    $c=$_GET['num3'];

    echo "El menor es: ".menor($a, $b, $c);

    # sin funcion

    /*
    if ($a <= $b && $a <= $c) {
        echo "$a es el número menor";
    } elseif ($b <= $a && $b <= $c) {
        echo "$b es el número menor";
    } else {
        echo "$c es el número menor";
    } */
?>