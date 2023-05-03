<?php
$arreglo = [
    0 => "desktop.png";
    1 => "JARVIS.png";
];

$semilla = time();
srand($semilla);
$numero_aleatorio = rand(0, count($arreglo)-1);
$imagen = imagecreatefrompng($arreglo[$numero_aleatorio]);
header("Content-Type: image/png");
imagepng($imagen);
?>