<?php
#include('verificar.php');acceso solo para usuarios logueados
#include('permiso.php'); #acceso solo para usuarios de cierto nivel
$id=$_GET['id'];

include('conexion.php');

$sql="DELETE FROM personas WHERE id=$id";
#echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se elimino el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
<script>
sleep(5);
cargarContenido('read.php')
</script>