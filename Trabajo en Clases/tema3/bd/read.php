<?php
include("verificar.php");
include("conexion.php");

$sql="SELECT id,nombres,apellidos,celular FROM personas";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <table>
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Celular</th>
            <th>Operaciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()){ 
        ?>
        <tr>
            <td><?php echo $row['nombres'] ?></td>
            <td><?php echo $row['apellidos'] ?></td>
            <td><?php echo $row['celular'] ?></td>
            <td>
                <?php if ($_SESSION["nivel"]) {?>
                <a href="form_update.php?id=<?php echo $row['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                <a href="formcreate.html?id=<?php echo $row['id']; ?>">Crear</a>
            <?php }?>
            </td>
        </tr>
        <?php }?>
    </table>
<?php
}
else{
    echo "No hay datos que mostrar";
}
$con->close();

?>

