<?php
#$image = $_POST["archivo"];
$titulo = $_POST["titulolibro"];
$autor = $_POST["autor"];
$id_editorial = $_POST["id_edi"];
$anio = $_POST["anio"];
$id_user = $_POST["id_user"];
$id_carrera = $_POST["id_carrera"];

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
$sql="INSERT into libros (imagen,titulo,autor,ideditorial,anio,idusuario,idcarrera)#creas la consulta que vas a mandar
VALUES ('$fotografia','$titulo','$autor',$id_editorial,$anio,$id_user,$id_carrera)";
//echo $sql;

if ($con->query($sql) === TRUE)#solo true si la ocnsulta se ejcuta sin errores
{
    echo 'Se anadio el registro correctamente';
} 
else 
{
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

