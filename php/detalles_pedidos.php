<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php
include '../conexion/conexion.php';
include '../php/sweetalert.php';


$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

if (isset($_POST['Enviar'])) {
    $query = "INSERT INTO `clientes`(`cedula`, `nombre`, `apellido`, `direccion`, `telefono`, `email`) 
    VALUES ('$cedula','$nombre','$apellido','$direccion','$telefono','$email')";
    $consulta = mysqli_query($conexion, $query);
    echo $sweet_clientes;
    echo "<a href='../index.html'>Regresar</a>";
}
?>