<?php
$con =new mysqli("localhost", "root", "","bd_biblioteca");
if ($con->connect_error)
    die ("conexion fallada".$con->connect_error);#PARA QUE MUERa EL SCRIPT
?>
