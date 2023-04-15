<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Primer parcial</title>
</head>
<body>
    <form action="sumarvectores.php" method="get">
    <?php
    session_start();
    $n=$_GET['n'];
    $_SESSION["n"] = $n;
    for ($i=0;$i<$n;$i++){
        echo "<input type='number' name='valor1[]'><input type='number' name='valor2[]'><br>";
    }
    ?>
    <br>
    <input type="submit" value="Calcular">
    </form>
    
</body>
</html>

