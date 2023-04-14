<?php
$nombres=$_POST["nombres"];
$apellidos=$_POST["apellidos"];
$celular=$_POST["celular"];
include("conexion.php");

$sql="INSERT into personas(nombres,apellidos,celular)
VALUES('$nombres','$apellidos',$celular)";

if ($con->query($sql) === TRUE) {
    echo "Se inserto correctamente";
}
else{
    echo "Error: ". $sql."<br>".$con->error;
}
$con->close();

?>

<meta http-equiv="refresh" content="3; url=read.php">