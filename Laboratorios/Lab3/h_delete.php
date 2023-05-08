<?php 
$id=$_GET['id'];
include('conexion.php');

$sql="DELETE FROM habitaciones WHERE id=$id";

if ($con->query($sql) === TRUE) {
    echo "Se elimino el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=h_read.php" />