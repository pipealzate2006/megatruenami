<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php
include '../conexion/conexion.php';
include '../php/sweetalert.php';

$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

if (isset($_POST['Enviar'])) {
    $query = "INSERT INTO `stocks`(`Cantidad`, `Precio`) VALUES
    VALUES ('$cantidad', '$precio')";
    $consulta = mysqli_query($conexion, $query);
    echo $sweet_stocks;
}
