<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html><?php
        include '../conexion/conexion.php';
        include '../php/sweetalert.php';

        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['correo'];

        if (isset($_POST['Enviar'])) {
            $query = "INSERT INTO `proveedores`(`nombre`, `direccion`, `telefono`, `email`) VALUES ('$nombre', '$direccion','$telefono','$email')";
            $consulta = mysqli_query($conexion, $query);
            echo $sweet_proveedores;
        }
        ?>