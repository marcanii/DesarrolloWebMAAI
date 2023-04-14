<?php 
session_start();
$usuario=$_POST["usuario"];
$password=sha1($_POST["password"]);
include("conexion.php");
$consulta="SELECT id,nombres,correo,nivel FROM usuarios WHERE correo='$usuario' AND".' password'."='$password'";
$resultado=$con->query($consulta);
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $_SESSION["nombres"]=$fila["nombres"];
    $_SESSION["correo"]=$fila["correo"];
    $_SESSION["nivel"]=$fila["nivel"];
    ?>
    <meta http-equiv="refresh" content="0; url=read.php">
    <?php
}
else {
    ?>
    Error contraseña no válida
    <meta http-equiv="refresh" content="0; url=login.html">
    <?php
}
?>

