<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="th_create.php" method="POST">
        <div>
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion">
        </div>
        <div>
            <label for="num_camas">Numero de camas:</label>
            <input type="number" name="num_camas">
        </div>
        <input type="submit" value="Crear">
    </form>
</body>
</html>