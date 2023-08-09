<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php
include '../conexion/conexion.php';
include '../php/sweetalert.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['correo'];

$upd = "UPDATE proveedores SET nombre='$nombre', direccion='$direccion', telefono='$telefono', email='$email'  WHERE id like $id";
$consulta = mysqli_query($conexion, $upd);
if (!$consulta) {
    echo "<script>alert('No se actualizo');</script>";
} elseif (empty($_POST['nombre']) or empty($_POST['direccion']) or empty($_POST['telefono']) or empty($_POST['telefono']) or empty($_POST['correo'])) {
    echo $sweet5;
} elseif ($sweet6) {
    echo $sweet6;
} else {
    header("location:../mostrar/mostrar_proveedores.php");
}

?>