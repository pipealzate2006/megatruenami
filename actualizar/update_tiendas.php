<?php

include '../conexion/conexion.php';

$id = $_GET['id'];
$sql = "SELECT id, razon_social, direccion, telefono, email, color, imagen, descripcion FROM tiendas WHERE id like $id";
$consulta = mysqli_query($conexion, $sql);
$fila = $consulta->fetch_assoc();
?>