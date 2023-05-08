<?php
include('conexion.php');

$sql = "SELECT id,descripcion,numero_camas FROM tipo_habitaciones";

$resultado = $con->query($sql);
if ($resultado->num_rows > 0) { ?>
    <table>
    <tr>
        <th>Descripcion</th>
        <th>Numero Camas</th>
        <th>Operaciones</th>
    </tr>
    <?php while ($row = $resultado->fetch_assoc()) {
    ?>
        <tr>
        <td><?php echo $row['descripcion'] ?> </td>
        <td><?php echo $row['numero_camas'] ?></td>
        <td>
            <a href="th_form_update.php?id=<?php echo $row['id']?>">Editar</a>
            <a href="th_delete.php?id=<?php echo $row['id']?>">Eliminar</a>
        </td>
        </tr>
    <?php } ?>
</table>
<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}
?>
<a href="th_form_create.php">Insertar</a>
<?php
$con->close();
?>