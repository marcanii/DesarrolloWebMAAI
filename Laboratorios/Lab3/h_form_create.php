<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="h_create.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?> ">
        <div>
            <label for="nro">Nro:</label>
            <input type="number" name="nro">
        </div>
        <div>
            <label for="idtipohabitacion">Id tipo habitacion:</label>
            <input type="number" name="idtipohabitacion">
        </div>
        <div>
            <label for="banoprivado">Baño privado:</label>
            <input type="number" name="banoprivado">
        </div>
        <div>
            <label for="espacio">Espacio:</label>
            <input type="text" name="espacio">
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="text" name="precio">
        </div>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>