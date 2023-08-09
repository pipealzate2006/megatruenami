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


  <div class="modal dialog-scrollable" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo registro de tienda</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="../php/tiendas.php">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nombre:</label>
              <input type="text" name="razon" class="form-control" id="recipient-name" placeholder="Nombre del empleado">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Direccion:</label>
              <input type="text" name="direccion" class="form-control" id="recipient-name" placeholder="Cargo">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Telefono:</label>
              <input type="number" name="telefono" class="form-control" id="recipient-name" placeholder="Cargo">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Correo:</label>
              <input type="email" name="correo" class="form-control" id="recipient-name" placeholder="Cargo">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Color:</label>
              <input type="color" name="color" class="form-control" id="recipient-name" placeholder="Cargo">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Imagen:</label>
              <input type="file" name="imagen" class="form-control" id="recipient-name" placeholder="Cargo">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Descripcion:</label>
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
  <style>
    #btn{
      margin: 15px;
    }
  </style>
  <div class="container">
    <button type="button" class="btn btn-success" id="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fa-solid fa-square-plus"></i> Agregar Registro</button>
    <table class="table table-striped">
      <tr class="table-dark">
        <th>ID</th>
        <th>RAZON SOCIAL</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th>EMAIL</th>
        <th>COLOR</th>
        <th>IMAGEN</th>
        <th>DESCRIPCION</th>
        <th>ACTUALIZAR</th>
        <th>ELIMINAR</th>
      </tr>
      <?php

      $query = "SELECT * FROM tiendas";
      $consulta = mysqli_query($conexion, $query);
      if (mysqli_num_rows($consulta) >= 1) {
        while ($fila = mysqli_fetch_array($consulta)) { ?>
          <tr>
            <th><?php echo $fila["id"] ?></th>
            <td><?php echo $fila['razon_social'] ?></td>
            <td><?php echo $fila['direccion'] ?></td>
            <td><?php echo $fila['telefono'] ?></td>
            <td><?php echo $fila['email'] ?></td>
            <td><?php echo $fila['color'] ?></td>
            <td><?php echo $fila['imagen'] ?></td>
            <td><?php echo $fila['descripcion'] ?></td>
            <td>
              <a href="#editar_<?php echo $fila['id']; ?>" class="btn btn-primary" data-bs-toggle="modal"><i class="fa-solid fa-rotate-right"></i> ACTUALIZAR</a>
            </td>
            <td><a href="../eliminar/eliminar_tiendas.php?id=<?php echo $fila["id"] ?>"><button type="button" class="btn btn-danger">ELIMINAR</button></a>
            </td>
            <?php include '../actualizar/actualizar-modal_tiendas.php' ?>
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