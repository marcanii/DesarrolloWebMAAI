<?php
include('conexion.php');
$sql = "SELECT id, nombre as profesion FROM profesiones";
$resultado = $con->query($sql);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <!-- No puede llamar por POST porque sino muere javascript -->
    <form action="javascript:crearPersona()" method="POST" enctype="multipart/form-data" id ="formpersona">
        <div>
            <label for="fotografia">Fotografia</label>
            <input type="file" name="archivo">
        </div>
        <div>
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" >
        </div>
        
        <div>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" >
        </div>
        <div>
            <label for="celular">Celular:</label>
            <input type="number" name="celular" >
        </div>

        <div>
            <label for="idprofesion">Profesion</label>
            <select name="idprofesion">
                <?php while($profesion=$resultado->fetch_assoc()){
                    ?> 
                    <option value=" <?php echo $profesion['id']; ?> ">
                    <?php echo $profesion['profesion']; ?> 
                    </option>
                <?php    
                }
                ?>
            </select>
        </div>
        <input type="submit" value="Anadir">
    </form>
    
</body>
</html>