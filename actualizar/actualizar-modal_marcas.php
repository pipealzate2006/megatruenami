<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="modal-dialog modal-dialog-scrollable" id="marcas_<?php echo $fila['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="../actualizar/sp_update_marcas.php?id=<?php echo $fila['id']; ?>">
            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Marca:</label>
              <input type="text" class="form-control" id="recipient-name" name="marca" value="<?php echo $fila['nombre']; ?>" >
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Descripcion:</label>
              <input type="text" class="form-control" id="recipient-name" name="descripcion" value="<?php echo $fila['descripcion']; ?>" >
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
        </form>
      </div>
    </div>
    </body>
    </html>