<?php 
include('conexion.php');
$nro = $_POST['nro'];
$idtipohabitacion = $_POST['idtipohabitacion'];
$banoprivado = $_POST['banoprivado'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];

$sql="INSERT into habitaciones (nro,idtipohabitacion,banoprivado,espacio,precio)
VALUES ('$nro','$idtipohabitacion','$banoprivado','$espacio','$precio')";

if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=h_read.php" />