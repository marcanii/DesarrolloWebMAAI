<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Lab2</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            width: 120px;
            height: 120px;
        }
    </style>
</head>
<body>
    <table>
        <?php
        $fila = $_GET["fila"];
        $columna = $_GET["columna"];
        $color = $_GET["color"];
        $nombre = $_GET["nombre"];
        $nombre1 = '';
        $color1 = '';
        $a = 0;
        $image = '';
        $tablero = array(
            array(1,0,1,0,1),
            array(0,1,0,1,0),
            array(1,0,1,0,1),
            array(0,1,0,1,0),
            array(1,0,1,0,1),
        );
        $tablero[$fila-1][$columna-1]=2;
        foreach ($tablero as $i) {
            echo "<tr>";
            foreach ($i as $j) {
                if ($j == 1) {
                    $color1 = $color;
                    $nombre1 = '';
                    $image = '';
                    $a = 1;
                }
                elseif ($j == 0) {
                    $color1 = '#fff';
                    $nombre1 = '';
                    $image = '';
                    $a = 0;
                }
                elseif ($j == 2) {
                    if ($a == 1) {
                        $color1 = '#fff';
                    }
                    else {
                        $color1 = $color;
                    }
                    $nombre1 = $nombre;
                    $image = 'image/Bowser.png';
                }
                echo "<td style='background-color:$color1;text-align: center;'>".$nombre1."<img style='width: 100px;' src='".$image."'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>