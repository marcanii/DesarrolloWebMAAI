<?php
    include('funciones.php');
    
    $numero = $_GET['num'];
    echo "El menor es: ".factorial($numero);

    # sin funcion
    
    /*
    $factorial = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    echo "El factorial de $numero es $factorial";
    */
?>
