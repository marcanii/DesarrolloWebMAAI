<?php
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];

###Seccion modificada para fotografia

$fotografia = null;
if (isset($_FILES['archivo'])) {
    $archivo_original = $_FILES['archivo']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . '.' . $extension;
}
include('conexion.php');

copy($_FILES['archivo']['tmp_name'],'images/'.$fotografia);

####
$sql="INSERT into productos (nombre,descripcion,precio,stock,imagen)#creas la consulta que vas a mandar
VALUES ('$nombre','$descripcion',$precio,$stock,'$fotografia')";
//echo $sql;

if ($con->query($sql) === TRUE)#solo true si la ocnsulta se ejcuta sin errores
{
    echo "Se anadio el registro correctamente";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
?>

<script>
sleep(3);
cargarContenidoAjax('read.php')
</script>
