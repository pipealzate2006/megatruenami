<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../estilos/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <?php include '../php/index.php'; ?>
  </nav>
  <div class="container">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo registro</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="../php/proveedores.php">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" id="recipient-name" placeholder="Nombre del Proveedor">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Direccion:</label>
                <input type="text" name="direccion" class="form-control" id="recipient-name" placeholder="Direccion">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Telefono:</label>
                <input type="text" name="telefono" class="form-control" id="recipient-name" placeholder="Telefono">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Email:</label>
                <input type="text" name="correo" class="form-control" id="recipient-name" placeholder="Email">
              </div>
          </div>
          <div class="modal-footer">
            <button type="reset" name="Cerrar" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>
          </div>
        </div>
        </form>
      </div>
    </div>
    <?php
    include '../conexion/conexion.php';
    ?>
      <button type="button" class="btn btn-success" id="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fa-solid fa-square-plus"></i> Agregar Registro</button>
      <style>
        #btn{
          margin: 15px;
        }
      </style>
    <table class="table table-striped">
      <tr class="table-dark">
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th>EMAIL</th>
        <th>ACTUALIZAR</th>
        <th>ELIMINAR</th>
      </tr>

      <?php
      $query = "SELECT * FROM proveedores";
      $consulta = mysqli_query($conexion, $query);

      if (mysqli_num_rows($consulta) >= 1) {
        while ($fila = mysqli_fetch_array($consulta)) { ?>

          <tr>
            <th><?php echo $fila["id"] ?></th>
            <td><?php echo $fila['nombre'] ?></td>
            <td><?php echo $fila['direccion'] ?></td>
            <td><?php echo $fila['telefono'] ?></td>
            <td><?php echo $fila['email'] ?></td>
            <td>
              <a href="#proveedores_<?php echo $fila['id']; ?>" class="btn btn-primary" data-bs-toggle="modal"><i class="fa-solid fa-rotate-right"></i> ACTUALIZAR</a>
            </td>
            <td><a href="../eliminar/eliminar_proveedores.php?id=<?php echo $fila["id"] ?>" type="button" class="btn btn-danger">ELIMINAR</a>
            </td>
            <?php include '../actualizar/actualizar-modal_proveedores.php' ?>
          </tr>
        <?php
        }
        ?>
    </table>
  <?php
      } else {
        echo "No hay resultados para esa busqueda";
      }
  ?>
  </div>
  <script src="https://kit.fontawesome.com/73c11b743b.js" crossorigin="anonymous"></script>
</body>

</html>