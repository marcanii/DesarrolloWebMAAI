<?php
include("funciones.php");
if (isset($_COOKIE['a']) and isset($_COOKIE['b'])){
    $resultado = restar($_COOKIE['a'],$_COOKIE['b']);
    echo 'Resultado de '.$_COOKIE['a'].' - '.$_COOKIE['b'].' = '.$resultado;
}
else {
    echo 'No existe valores';
}
?>