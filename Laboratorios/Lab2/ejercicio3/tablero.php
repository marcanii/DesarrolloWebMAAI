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
            width: 60px;
            height: 60px;
        }
        .color0{
            background-color:#ffffff;
        }
        .color1{
            background-color:#0e0af8;
        }
    </style>
</head>
<body>
    <table>
        <?php
        $tablero = array(
            array(1,0,1,0,1,0,1,0),
            array(0,1,0,1,0,1,0,1),
            array(1,0,1,0,1,0,1,0),
            array(0,1,0,1,0,1,0,1),
            array(1,0,1,0,1,0,1,0),
            array(0,1,0,1,0,1,0,1),
            array(1,0,1,0,1,0,1,0),
            array(0,1,0,1,0,1,0,1),
        );
        foreach ($tablero as $i) {
            echo "<tr>";
            foreach ($i as $j) {
                echo "<td class='color".$j."'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table><br>
    <form action="tablerocambiado.php" method="get">
        <div>
            <label for="col">Introd. Col:</label>
            <input type="number" name="col">
        </div>
        <div>
            <label for="fil">Introd. fil:</label>
            <input type="number" name="fil">
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>