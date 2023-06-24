<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Universitario: Abel Israel Marcani Aguilar</h3>
    <h3>Carrera: Ing. en Ciencias de la Computación</h3>
    <h3>CU: 111-342</h3>
    <?php
        session_start();
        if (isset($_COOKIE['contador'])){
            $valor = $_COOKIE['contador']+1;
            echo "Es la visita $valor";
            setcookie("contador", $valor, 0); /* expira en 1 hora */
        }
        else {
            echo "Es la visita 1";
            setcookie("contador", 0); /* se expira en 1 hora */
        }
    ?>
</body>
</html>