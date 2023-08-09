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
            <form method="post" action="../php/marcas.php">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Marca:</label>
                <input type="text" name="marca" class="form-control" id="recipient-name" placeholder="Nombre de la marca">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Descripcion:</label>
                <input type="text" name="descripcion" class="form-control" id="recipient-name" placeholder="Descripcion">
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
  
    <form class="d-flex" role="search" method="post" id="hola">
          <input class="form-control me-2" type="search" placeholder="Search" name="buscar" aria-label="Search">
          <button class="btn btn-outline-success" name="btn" type="submit">Search</button>
        </form>
      <button type="button" class="btn btn-success" id="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fa-solid fa-square-plus"></i> Agregar Registro</button>
    <table class="table table-striped" id="mitabla">
      <thead>
      <tr class="table-dark">
        <th>ID</th>
        <th>MARCA</th>
        <th>DESCRIPCION</th>
        <th>ACTUALIZAR</th>
        <th>ELIMINAR</th>
      </tr>
      </thead>
      <?php
      if (isset($_POST['buscar']) && isset($_POST['btn'])){
        
        $buscar = $_POST['buscar'];
        $buscar = "%$buscar%";
      
      $query = "SELECT * FROM marcas WHERE nombre LIKE '$buscar'" ;
      $consulta = mysqli_query($conexion,$query);

      if (mysqli_num_rows($consulta) >= 1) {
        while ($fila = mysqli_fetch_array($consulta)) { ?>
        <tbody>
          <tr>
            <td><?php echo $fila["id"] ?></td>
            <td><?php echo $fila['nombre'] ?></td>
            <td><?php echo $fila['descripcion'] ?></td>
            <td>
              <a href="#marcas_<?php echo $fila['id']; ?>" class="btn btn-primary" data-bs-toggle="modal"><i class="fa-solid fa-rotate-right"></i> ACTUALIZAR</a>
            </td>
            <td><a href="../eliminar/eliminar_marcas.php?id=<?php echo $fila["id"] ?>" type="button" class="btn btn-danger">ELIMINAR</a>
            </td>
            <?php include '../actualizar/actualizar-modal_marcas.php' ?>
          </tr>                 
        <?php
        }
        ?>
        </tbody>
    </table>
  <?php
      } else {
        echo "No hay resultados para esa busqueda";
      }
    }
  ?>
  </div>
  <script src="https://kit.fontawesome.com/73c11b743b.js" crossorigin="anonymous"></script>

</body>
</html>