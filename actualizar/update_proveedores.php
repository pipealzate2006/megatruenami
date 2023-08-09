<?php 
 include '../conexion/conexion.php';
 
$id = $_GET['id'];
 $sql = "SELECT id, nombre, direccion, telefono, email FROM proveedores WHERE id like $id";
 $consulta = mysqli_query($conexion, $sql);
 $fila = $consulta->fetch_assoc();
?>