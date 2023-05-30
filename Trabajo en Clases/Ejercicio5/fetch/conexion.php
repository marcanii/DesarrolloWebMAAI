<?php
$con =new mysqli("localhost", "root", "","base_departamentos");
if ($con->connect_error)
    die ("conexion fallada".$con->connect_error);#PARA QUE MUERa EL SCRIPT
?>
