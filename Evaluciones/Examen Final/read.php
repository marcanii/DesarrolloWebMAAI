<?php
#acceso solo para usuarios logueados
include('conexion.php');

$sql = "SELECT id,nombre,descripcion,precio,stock,imagen FROM productos";

$resultado = $con->query($sql); 
if ($resultado->num_rows > 0) 
{
?>
    <table>
        <tr>
            <th><a href="#"> ID</a></th>
            <th><a href="#">Nombre</a> </th>
            <th><a href="#">Descripcion</a></th>
            <th><a href="#">Precio</a></th>
            <th><a href="#">Stock</a></th>
            <th>Fotografia</th>
        </tr>

        <?php while ($row = $resultado->fetch_assoc()) {#fetch_assoc() devuelve un array asociativo que corresponde a la fila obtenida o NULL si no hubiera más filas.
        #fetch te ira devolviendo fila por fila hasta que no haya mas filas
        ?>
            <tr>
                <td><?php echo $row['id'] ?> </td>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['descripcion'] ?></td>
                <td><?php echo $row['precio'] ?> </td>
                <td><?php echo $row['stock'] ?> </td>
                <td><img width="100px" src="images/<?php echo $row['imagen'];  ?>"> </td>
            </tr>
        <?php } ?>
    </table>
    <div id="contenidocrear">
        <button><a href="javascript:cargarContenidoFetch('form_insertar.html')">Insertar</a></button>
    </div>
<?php
}
else 
{
    echo "la tabla no tiene datos que mostrar";
}
?>

