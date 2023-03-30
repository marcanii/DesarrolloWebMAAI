<?php
include('operaciones.php');
if (isset($_SESSION['op'])){
    $op = $_SESSION['op'];
    echo "La suma es: ".$op->sumar();
}
else{
    echo 'no existe valores';
}
?>
<meta http-equiv="refresh" content="2;url=menu.html">