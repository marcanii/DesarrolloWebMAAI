<?php
#acceso solo para usuarios logueados
include('conexion.php');

if(!isset($_GET['orden'])){
    $orden='per.id';
}
else
{
    $orden=$_GET['orden'];
}

if(!isset($_GET['buscar'])){
    $buscar="'%'";

}
else{
    $buscar="'%".str_replace(" ","%",$_GET['buscar'])."%'";
}

$sql = "SELECT per.id,fotografia,nombres,apellidos,celular,nombre as profesion 
FROM personas per left join profesiones pro on per.idprofesion=pro.id
where nombres like $buscar
order by $orden";

$resultado = $con->query($sql); 
if ($resultado->num_rows > 0) 
{
?>
    <div>
        <form action="read.php" method="get">
            <label for="">Busqueda</label>
            <input type="text" name="buscar" value=" <?php echo isset($_GET['buscar'])?$_GET['buscar']:'';?>">
            <input type="submit" value="Buscar">
        </form>
    </div>
    <table>
        <tr>
            <th>Fotografia</th>    
            <th><a href="read.php?orden=nombres"> Nombres</a></th>
            <th><a href="read.php?orden=apellidos">Apellidos</a> </th>
            <th><a href="read.php?orden=celular">Celular</a></th>
            <th><a href="read.php?orden=nombre">Profesion</a></th>
            <th>Operaciones</th>
        </tr>
        <!-- $row = array(
            "nombres" => "Manuel",
            "apellidos" => "Torricos",
            "celular"=> 72895575
        ); -->

        <?php while ($row = $resultado->fetch_assoc()) {#fetch_assoc() devuelve un array asociativo que corresponde a la fila obtenida o NULL si no hubiera más filas.
        #fetch te ira devolviendo fila por fila hasta que no haya mas filas
        ?>
            <tr>
                <td><img width="100px" src="images/<?php echo $row['fotografia'];  ?>" alt=""> </td>
                <td><?php echo $row['nombres'] ?> </td>
                <td><?php echo $row['apellidos'] ?></td>
                <td><?php echo $row['celular'] ?></td>
                <td><?php echo $row['profesion'] ?> </td>

                <td>
                
                    <a href="javascript:cargarContenido('form_update.php?id= <?php echo $row ['id'];?>')">Editar</a>
                    <a href="javascript:eliminarPersona('<?php echo $row['id'] ?>')">Eliminar</a>
                    
                    
                </td>
            </tr>
        <?php } ?>
    </table>
<?php
}
else 
{
    echo "la tabla no tiene datos que mostrar";
}
// if($_SESSION['nivel']==1)
// {
    ?>
    <!-- <a href="form_create.php">Insertar</a> -->
    <?php
// }
// $con->close();
?>

