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

include('conexion.php');
$id=$_GET['id'];
$sql="SELECT fotografia,nombres,apellidos,celular,idprofesion from personas where id=$id";
$sql2="SELECT id,nombre as profesion from profesiones";

$resultado=$con->query($sql);
$resultado2=$con->query($sql2);

$row = $resultado->fetch_assoc();# sabemos que solo devolvera una fila
// $row2 =$resultado2->fetch_assoc();
?>
    <form action="javascript:editarPersona()" method="POST" id='formpersona2'>
        <input type="hidden" name="id" value="<?php echo $id; ?> ">
        <div>
            <img width="200px" src="imagenes/<?php echo $row['fotografia']; ?>" alt="">
            <label for="archivo">Fotografia</label>
            <input type="file" name="archivo">

        </div>
        <div>
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" value="<?php echo $row['nombres']; ?>" >
            <!-- value solo es para mostrar temporalmente los valores actuales, aunque si no los modificamos 
        se quedaran igual -->
        </div>
        

        <div>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>" >
        </div>

        <div>
            <label for="celular">Celular:</label>
            <input type="number" name="celular" value="<?php echo $row['celular']; ?>" >
        </div>

        <div>
            <label for="idprofesion">Profesion</label>
            <select name="idprofesion">
                <?php while($profesion = $resultado2->fetch_assoc()){
                    ?>
                    <option value="<?php echo $profesion['id'] ?>"
                    <?php echo $profesion['id']==$row['idprofesion']?'selected':'';?>>
                    <?php echo $profesion['profesion']?></option>
                    <?php
                    }
                    ?>

            </select>

        </div>

        <input type="submit" value="Actualizar">
        


    </form>
    
</body>
</html>