<?php 
include('conexion.php');
$descripcion=$_POST['descripcion'];
$num_camas=$_POST['num_camas'];

$sql="INSERT into tipo_habitaciones (descripcion,numero_camas)
VALUES ('$descripcion','$num_camas')";

if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=th_read.php" />