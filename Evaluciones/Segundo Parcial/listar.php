<?php
#acceso solo para usuarios logueados
include('conexion.php');

if(!isset($_GET['orden'])){
    $orden='id';
}
else
{
    $orden=$_GET['orden'];
}

$sql = "SELECT id,imagen,titulo,autor,ideditorial,anio,idusuario,idcarrera FROM libros
order by $orden";

$resultado = $con->query($sql); 
if ($resultado->num_rows > 0) 
{
?>
    <table>
        <tr>
            <th>Fotografia</th>
            <th><a href="javascript:cargarContenidoAjax('listar.php?orden=titulo','Pregunta 4 Listar libros')"> Titulo</a></th>
            <th><a href="javascript:cargarContenidoAjax('listar.php?orden=autor','Pregunta 4 Listar libros')">Autor</a> </th>
            <th><a href="javascript:cargarContenidoAjax('listar.php?orden=ideditorial','Pregunta 4 Listar libros')">ID Editorial</a></th>
            <th><a href="javascript:cargarContenidoAjax('listar.php?orden=anio','Pregunta 4 Listar libros')">Año</a></th>
            <th><a href="javascript:cargarContenidoAjax('listar.php?orden=idusuario','Pregunta 4 Listar libros')">ID Usuario</a></th>
            <th><a href="javascript:cargarContenidoAjax('listar.php?orden=idcarrera','Pregunta 4 Listar libros')">ID Carrera</a></th>
        </tr>

        <?php while ($row = $resultado->fetch_assoc()) {#fetch_assoc() devuelve un array asociativo que corresponde a la fila obtenida o NULL si no hubiera más filas.
        #fetch te ira devolviendo fila por fila hasta que no haya mas filas
        ?>
            <tr>
                <td><img width="100px" src="images/<?php echo $row['imagen'];  ?>" alt=""> </td>
                <td><?php echo $row['titulo'] ?> </td>
                <td><?php echo $row['autor'] ?></td>
                <td><?php echo $row['ideditorial'] ?></td>
                <td><?php echo $row['anio'] ?> </td>
                <td><?php echo $row['idusuario'] ?> </td>
                <td><?php echo $row['idcarrera'] ?> </td>
            </tr>
        <?php } ?>
    </table>
<?php
}
else 
{
    echo "la tabla no tiene datos que mostrar";
}
?>

