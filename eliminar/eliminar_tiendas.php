<?php
include '../conexion/conexion.php';

$id = $_GET['id'];
$eliminar = "DELETE FROM tiendas WHERE id like $id";
$consulta = mysqli_query($conexion, $eliminar);

if(!$consulta){
    echo "<script>alert('No se elimino');</script>";
} else {
    header("location:../mostrar/mostrar_tiendas.php");
}
?>