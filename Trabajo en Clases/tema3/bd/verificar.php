<?php
session_start();
if (!isset($_SESSION["nombres"])) {
    header("location:mensaje.html");
}
?>
<a href="cerrarsession.php">Cerrar Sesion</a>