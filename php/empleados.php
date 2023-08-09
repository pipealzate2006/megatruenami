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
$email = $_POST['email'];
$clave = $_POST['clave'];

if (isset($_POST['Enviar'])) {
    $query = "INSERT INTO `empleados`(`id`, `cedula`, `nombre`, `apellido`, `direccion`, `email`, `clave`, `id_rol`, `id_tienda`)  VALUES ('$cedula', '$nombre', '$apellido', '$direccion', '$email', '$clave')";
    $consulta = mysqli_query($conexion, $query);
    echo $sweet_empleados;
}
?>