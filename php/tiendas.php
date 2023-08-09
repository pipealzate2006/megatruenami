<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php
include '../conexion/conexion.php';
include '../php/sweetalert.php';

$empresa = $_POST['razon'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['correo'];
$color = $_POST['color'];
$imagen = $_POST['imagen'];
$descripcion = $_POST['descripcion'];

if (isset($_POST['Enviar'])) {
    $query = "INSERT INTO `tiendas`(`razon_social`, `direccion`, `telefono`, `email`, `color`, `imagen`, `descripcion`) 
    VALUES ('$empresa','$direccion','$telefono','$email','$color','$imagen','$descripcion')";
    $consulta = mysqli_query($conexion, $query);
    echo $sweet_tiendas;
}
