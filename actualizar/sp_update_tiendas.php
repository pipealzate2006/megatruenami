<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php

include '../conexion/conexion.php';
include '../php/sweetalert.php';
$id = $_POST['id'];
$razon = $_POST['razon'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$color = $_POST['color'];
$imagen = $_POST['imagen'];
$descripcion = $_POST['descripcion'];

$upd = "UPDATE tiendas SET razon_social='$razon', direccion='$direccion', telefono='$telefono', email='$email', color='$color', imagen='$imagen', descripcion='$descripcion' WHERE id like $id";
$consulta = mysqli_query($conexion, $upd);
if (!$consulta) {
    echo "<script>alert('No se actualizo');</script>";
} elseif (empty($_POST['razon']) or empty($_POST['direccion']) or empty($_POST['telefono']) or empty($_POST['email']) or empty($_POST['color']) or empty($_POST['imagen']) or empty($_POST['descripcion'])) {
    echo $sweet1;
} elseif ($sweet3) {
    echo $sweet3;
} else {
    header("location:../mostrar/mostrar_tiendas.php");
}

?>