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
  <div class="marca_container">
    <form method="post" action="../php/marcas.php" class="row g-3">
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="marca" id="inputPassword4">
      </div>
      <div class="col-md-6">
        <label for="inputZip" class="form-label">Descripcion</label>
        <input type="text" name="descripcion" class="form-control" id="inputZip">
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