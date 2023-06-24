<?php
$correo = $_GET['usuario'];
$contrasena = sha1($_GET['contrasena']);
include('conexion.php');
$sql = "SELECT id,nombre,apellido,correo_electronico,contrasena,rol FROM usuarios
        WHERE correo_electronico='$correo' AND contrasena='$contrasena'";
// echo $sql;
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    header("location:principal.html");
} else {
?>
    Error contraseña no valida
    <meta http-equiv="refresh" content="2; url=login.html" />
<?php
}
?>