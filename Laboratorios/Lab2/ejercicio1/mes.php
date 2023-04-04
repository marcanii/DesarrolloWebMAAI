<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Lab2</title>
</head>
<body>
    <?php
    $n = $_GET["n"];
    $meses = array(
        1 =>'Enero',
        2 =>'Febrero',
        3 =>'Marzo',
        4 =>'Abril',
        5 =>'Mayo',
        6 =>'Junio',
        7 =>'Julio',
        8 =>'Agosto',
        9 =>'Septiembre',
        10 =>'Octubre',
        11 =>'Noviembre',
        12 =>'Diciembre'
    );
    $seleccion = $meses[$n];
    ?>
    <select>
        <?php
        foreach ($meses as $a => $valor) {
            $selec = '';
            if ($valor==$seleccion) {
               $selec = 'selected';
            }
            echo '<option value="'.$a.'" '.$selec.'>'.$valor.'</option>';
        }
        ?>
    </select>
</body>
</html>