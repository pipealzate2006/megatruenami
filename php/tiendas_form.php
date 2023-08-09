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
  <?php include '../php/index.php';
  include '../php/sweetalert.php'; ?>
  <div class="tienda_container">
  
    <form method="post" action="../php/tiendas.php" class="row g-3">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Empresa</label>
        <input type="text" name="razon" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion" placeholder="calle 52 #70-20" id="inputPassword4">
      </div>
      <div class="col-6">
        <label for="inputAddress" class="form-label">Telefono</label>
        <input type="number" class="form-control" name="telefono" telefono id="inputAddress">
      </div>
      <div class="col-6">
        <label for="inputAddress2" class="form-label">Correo</label>
        <input type="email" class="form-control" name="correo" id="inputAddress2">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Color tienda</label>
        <input type="color" class="form-control" name="color" id="inputCity">
      </div>
      <div class="col-md-6">
        <label for="inputZip" class="form-label">Imagen</label>
        <input type="file" class="form-control" name="imagen" id="inputZip">
      </div>
      <div class="col-md-6">
        <label for="inputZip" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="inputZip">
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>

</html>