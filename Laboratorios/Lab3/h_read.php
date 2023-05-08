<?php
include('conexion.php');

$sql = "SELECT id,nro,idtipohabitacion,banoprivado,espacio,precio FROM habitaciones";

$resultado = $con->query($sql);
if ($resultado->num_rows > 0) { ?>
    <table>
    <tr>
        <th>Nro</th>
        <th>Id tipo habitacion</th>
        <th>Baño privado</th>
        <th>Espacio</th>
        <th>Precio</th>
        <th>Operaciones</th>
    </tr>
    <?php while ($row = $resultado->fetch_assoc()) {
    ?>
        <tr>
        <td><?php echo $row['nro'] ?> </td>
        <td><?php echo $row['idtipohabitacion'] ?></td>
        <td><?php echo $row['banoprivado'] ?></td>
        <td><?php echo $row['espacio'] ?></td>
        <td><?php echo $row['precio'] ?></td>
        <td>
            <a href="h_form_update.php?id=<?php echo $row['id']?>">Editar</a>
            <a href="h_delete.php?id=<?php echo $row['id']?>">Eliminar</a>
        </td>
        </tr>
    <?php } ?>
</table>
<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}
?>
<a href="h_form_create.php">Insertar</a>
<?php
$con->close();
?>