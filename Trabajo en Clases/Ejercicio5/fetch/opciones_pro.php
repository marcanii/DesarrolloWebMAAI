<?php
include("conexion.php");
$id = $_GET['id'];
$sql = "SELECT * FROM provincia WHERE iddepartamento=$id";
$resultado = $con->query($sql); 
if ($resultado->num_rows > 0){
while ($row = $resultado->fetch_assoc()){?>
    <option value="<?php echo $row['id']?>"><?php echo $row['nombre']?></option>
<?php } ?>
<?php
} else{
    echo "no existe valores en la tabla";
}
?>