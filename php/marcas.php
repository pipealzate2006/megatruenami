<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php
include '../conexion/conexion.php';
include '../php/sweetalert.php';

$nombre = $_POST['marca'];
$descripcion = $_POST['descripcion'];

if (isset($_POST['Enviar'])) {
    $query = "INSERT INTO `marcas`(`nombre`, `descripcion`) VALUES ('$nombre', '$descripcion')";
    $consulta = mysqli_query($conexion, $query);
    echo $sweet_marcas;
}
?>