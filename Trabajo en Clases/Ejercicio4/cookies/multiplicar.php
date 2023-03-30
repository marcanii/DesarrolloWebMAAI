<?php
include('operaciones.php');
if (isset($_COOKIE['a']) and isset($_COOKIE['b'])){
    $op = new Operaciones($_COOKIE['a'],$_COOKIE['b']);
    echo "La multiplicacion es: ".$op->multiplicar();
}
else{
    echo 'no existe valores';
}
?>
<meta http-equiv="refresh" content="2;url=menu.html">