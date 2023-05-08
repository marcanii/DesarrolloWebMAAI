<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    include('conexion.php');
    $sql = "SELECT nro,idtipohabitacion,banoprivado,espacio,precio FROM habitaciones where id=$id";
    $resultado = $con->query($sql);
    $row = $resultado->fetch_assoc();
    ?>
    <form action="h_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?> ">
        <div>
            <label for="nro">Nro:</label>
            <input type="number" name="nro" value="<?php echo $row['nro']; ?>">
        </div>
        <div>
            <label for="idtipohabitacion">Id tipo habitacion:</label>
            <input type="number" name="idtipohabitacion" value="<?php echo $row['idtipohabitacion']; ?>">
        </div>
        <div>
            <label for="banoprivado">Baño privado:</label>
            <input type="number" name="banoprivado" value="<?php echo $row['banoprivado']; ?>">
        </div>
        <div>
            <label for="espacio">Espacio:</label>
            <input type="text" name="espacio" value="<?php echo $row['espacio']; ?>">
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="text" name="precio" value="<?php echo $row['precio']; ?>">
        </div>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>