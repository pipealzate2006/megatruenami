<?php 
 include '../conexion/conexion.php';
 
$id = $_GET['id'];
 $sql = "SELECT id, nombre, descripcion FROM marcas WHERE id like $id";
 $consulta = mysqli_query($conexion, $sql);
 $fila = $consulta->fetch_assoc();
?>