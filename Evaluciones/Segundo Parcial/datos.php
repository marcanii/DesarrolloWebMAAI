<?php
include('conexion.php');
$sql = "SELECT imagen,titulo FROM libros";

$resultado = $con->query($sql);
$agenda = array();
while ($row = $resultado->fetch_assoc()) {
    $agenda[] = $row;
}
echo json_encode($agenda, JSON_UNESCAPED_UNICODE);

$con->close();