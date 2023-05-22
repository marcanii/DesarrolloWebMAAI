<?php
// include('verificar.php');#acceso solo para usuarios logueados
// include('permiso.php'); #acceso solo para usuarios de cierto nivel
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$celular=$_POST['celular'];
$idprofesion=$_POST['idprofesion'];

$id=$_POST['id'];
include('conexion.php');
###Seccion modificada para fotografia
if(isset($_FILES['archivo']['tmp_name'])){
    $archivo_original=$_FILES['archivo']['name'];
    $arreglo=explode(".",$archivo_original);
    $extension=$arreglo[1];
    $fotografia=uniqid().'.'.$extension;
    copy($_FILES['archivo']['tmp_name'],'images/'.$fotografia);
    $sql="UPDATE personas SET fotografia='$fotografia', nombres='$nombres',apellidos='$apellidos',
    celular=$celular,idprofesion=$idprofesion WHERE id=$id";
}
else{
    $sql="UPDATE personas SET nombres='$nombres',apellidos='$apellidos',
    celular=$celular,idprofesion=$idprofesion WHERE id=$id";
}




#solo comillas '' se usa para valores de tipo texto
#echo $sql;

if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<!-- <meta http-equiv="refresh" content="3; url=read.php" /> -->
<script>
sleep(5);
cargarContenido('read.php')
</script>