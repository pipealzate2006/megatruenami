<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php
include '../conexion/conexion.php';
include '../php/sweetalert.php';
$id = $_POST['id'];
$nombre = $_POST['marca'];
$descripcion = $_POST['descripcion'];

$upd = "UPDATE marcas SET nombre='$nombre', descripcion='$descripcion' WHERE id like $id";
$consulta = mysqli_query($conexion, $upd);
if (!$consulta) {
    echo "<script>alert('No se actualizo');</script>";
} elseif (empty($_POST['marca']) or empty($_POST['descripcion'])) {
    echo $sweet1;
} elseif ($sweet4) {
    echo $sweet4;
} else {
    header("location:../mostrar/mostrar_marcas.php");
}

?>