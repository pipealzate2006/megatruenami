<?php
include '../conexion/conexion.php';
$query = "SELECT * FROM tiendas";
$consulta = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../estilos/css/bootstrap.min.css">
  <link rel="stylesheet" href="../estilos/css/estilo.css">
  <title>Document</title>
</head>

<body background="../estilos/images/fondo.jpg">
  <?php include '../php/index.php'; ?>
  <div class="empleados_container">
    <form method="post" action="../php/empleados.php" class="row g-3">
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Cedula</label>
        <input type="number" class="form-control" required name="cedula" id="inputPassword4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Nombre</label>
        <input type="text" class="form-control" required name="nombre" id="inputPassword4">
      </div>
      <div class="col-md-6">
        <label for="inputZip" class="form-label">Apellido</label>
        <input type="text" name="apellido" class="form-control" required id="inputZip">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Direccion</label>
        <input type="text" class="form-control" required name="direccion" id="inputPassword4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Correo</label>
        <input type="email" class="form-control" required name="email" id="inputPassword4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Clave</label>
        <input type="password" class="form-control" required name="clave" id="inputPassword4">
      </div>
      <div class="col-6">
        <select class="form-select" aria-label="Default select example" name="select_tiendas" id="">
          <option selected value="">Selecciona la tienda</option>
          <?php
          while ($f = mysqli_fetch_array($consulta)) {
            echo "<option value=" . $f[0] . ">" . $f[1] . "</option>";
          }
          ?>
        </select>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Acepto los terminos
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>
      </div>
    </form>
  </div>

</body>

</html>