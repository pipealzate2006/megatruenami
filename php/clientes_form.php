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
  <?php include "../php/index.php"; ?>
  <div class="clientes_container">
    <form method="post" action="../php/clientes.php" class="row g-3">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Cedula</label>
        <input type="number" name="cedula" required class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Nombre</label>
        <input type="text" class="form-control" required name="nombre" id="inputPassword4">
      </div>
      <div class="col-6">
        <label for="inputAddress" class="form-label">Apellido</label>
        <input type="text" class="form-control" required name="apellido" id="inputAddress">
      </div>
      <div class="col-6">
        <label for="inputAddress2" class="form-label">Direccion</label>
        <input type="text" class="form-control" required name="direccion" id="inputAddress2" placeholder="calle 52 #70-20">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Telefono</label>
        <input type="number" class="form-control" required name="telefono" id="inputCity">
      </div>
      <div class="col-md-6">
        <label for="inputZip" class="form-label">Email</label>
        <input type="email" class="form-control" required name="email" id="inputZip">
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