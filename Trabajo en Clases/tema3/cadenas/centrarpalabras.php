// realizar un programa en php que introducida una cadena, imprima las palabras de la oracion con la inicial
// en mayuscula y el resto de la palabra en minuscula centrada
// Ej.
// Programar en la web es facil
/*
                Programar
                    en
                    la
                   web
                    es
                   facil
*/

// uppercase, lowercase,

<?php
    $cadena = $_GET['cadena'];
    $palabras = explode(' ',$cadena);

    foreach ($palabras as $palabra){
        ?>
        <div style="text-align: center;">
        <?php
            echo strtoupper($palabra[0]).strtolower(substr($palabra,1));
        ?>
        </dvi>
        <?php 
    }


?>