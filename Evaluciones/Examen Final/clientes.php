<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container1{
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 800px;
        }
        .clientes{
            margin: 10px;
            background-color: #0a4db3;
            text-align: center;
            width: 180px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
    #acceso solo para usuarios logueados
    include('conexion.php');

    $sql = "SELECT id,nombre,direccion,correo_electronico,telefono,imagen FROM clientes";

    $resultado = $con->query($sql); 
    if ($resultado->num_rows > 0) 
    { ?>
    <div class="container1">
    <?php while ($row = $resultado->fetch_assoc()) {
        ?>
        <div class="clientes">
            <img width="120px" src="images/<?php echo $row['imagen'];?>">
            <h3><?php echo $row['nombre'] ?></h3>
            <div>
                <p>Correo electronico: <?php echo $row['correo_electronico']?></p>
            </div>
            <div>
                <p>Telefono: <?php echo $row['telefono']?></p>
            </div>
            <div>
                <p>Direccion: <?php echo $row['direccion']?></p>
            </div>
        </div>
        <?php }?>
    </div>    
    <?php
    }
    else 
    {
        echo "la tabla no tiene datos que mostrar";
    } ?>
</body>
</html>