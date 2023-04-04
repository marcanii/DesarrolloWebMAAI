<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Lab2</title>
</head>
<body>
    <form action="eliminar.php" method="get">
    <?php
    $n=$_GET['n'];
    for ($i=0;$i<$n;$i++){
        echo "<input type='number' name='valor[]'><br>";
    }
    ?>
    <input type="hidden" name="n" value="<?php echo $n;?>">
    <br>
    <div>
        <label for="mayor">Introd. el numero mayor: </label>
        <input type="number" name="mayor">
    </div>
    <input type="submit" value="Eliminar Mayores">
    </form>
    
</body>
</html>

