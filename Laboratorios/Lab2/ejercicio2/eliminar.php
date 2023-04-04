<?php
include("eliminarmayores.php");
$mayor = $_GET["mayor"];
$arr = $_GET["valor"];

elimarmen($mayor, $arr);
?>