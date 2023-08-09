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
  <div class="container">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo registro</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="../php/roles.php">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nombre del empleado:</label>
                <input type="text" name="nombre" class="form-control" id="recipient-name" placeholder="Nombre del empleado">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Cargo:</label>
                <input type="text" name="descripcion" class="form-control" id="recipient-name" placeholder="Cargo">
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
    <table class="table table-striped">
      <tr class="table-dark">
        <th>ID</th>
        <th>CANTIDAD</th>
        <th>PRECIO</th>
        <th>ID_PRODUCTO</th>
        <th>ACTUALIZAR</th>
        <th>ELIMINAR</th>
      </tr>

      <?php
      $query = "SELECT * FROM stocks";
      $consulta = mysqli_query($conexion, $query);

      if (mysqli_num_rows($consulta) >= 1)
        while ($fila = mysqli_fetch_array($consulta)) {
          foreach ($consulta as $r) {
            echo '.$r[0].' ?>

          <tr>
            <th><?php echo $fila["id"] ?></th>
            <td><?php echo $fila['Cantidad'] ?></td>
            <td><?php echo $fila['Precio'] ?></td>
            <td><?php echo $fila['id_productos'] ?></td>
            <td>
              <a href="#edit_<?php echo $fila['id']; ?>" class="btn btn-primary" data-bs-toggle="modal"><i class="fa-solid fa-rotate-right"></i> ACTUALIZAR</a>
            </td>
            <td><a href="../eliminar/eliminar_roles.php?id=<?php echo $fila["id"] ?>" type="button" class="btn btn-danger">ELIMINAR</a>
            </td>
            <?php include '../actualizar/actualizar-modal_roles.php' ?>
          </tr>
        <?php
          }
        ?>
    </table>
  <?php
        }
      else {
        echo "No hay resultados para esa busqueda";
      }
  ?>
  <button type="button" class="btn btn-success" id="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fa-solid fa-square-plus"></i> Agregar Registro</button>
  </div>
  <script src="https://kit.fontawesome.com/73c11b743b.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <script src="bootstrap/css/bootstrap.js"></script>
</body>

</html>