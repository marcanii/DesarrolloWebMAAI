<?php
$con = new mysqli("localhost","root","","bd_agenda23");
if ($con->connect_error){
    die("La base de datos fallo".$con->connect_error);
}

?>