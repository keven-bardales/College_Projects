<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Productos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../index.php">Mi sitio web</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="../vistas/productos.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../vistas/proveedores.php">Proveedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../vistas/acompanantes.php">Acompañantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../vistas/productosutilizanacompañantes.php">Productos por acompañantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../vistas/platos.php">Platos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../vistas/acompañantesplato.php">Acompañantes por plato</a>   
          </li>
        
          <li class="nav-item">
          <a class="nav-link" href="../index.php#reportesId">Reportes</a>
        </li>

        </ul>
      </div>
    </nav>

  <div class="container mt-5">
  <form action="../actions/actionsProveedor/agregarProveedor.php" method="post">
    <div>
    <h1 class="text-center mb-4">Agregar nuevo Proveedor</h1>
    </div>

    <div class="mb-3">
      <label for="codigo_proveedor" class="form-label">Codigo del Proveedor:</label>
      <input type="text" class="form-control" id="codigo_proveedor" name="codigo_proveedor" required>
    </div>
    <div class="mb-3">
      <label for="nombre_proveedor" class="form-label">Nombre del Proveedor:</label>
      <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor" required>
    </div>
    <div class="mb-3">
      <label for="direccion_proveedor" class="form-label">Direccion Proveedor:</label>
      <input type="text" class="form-control" id="direccion_proveedor" name="direccion_proveedor" required>
    </div>
    <div class="mb-3">
      <label for="rtn_proveedor" class="form-label">Rtn Proveedor:</label>
      <input type="text" class="form-control" id="rtn_proveedor" name="rtn_proveedor" required>
    </div>

    <div class="mb-3">
      <label for="ciudad_proveedor" class="form-label">Ciudad Proveedor:</label>
      <input type="text" class="form-control" id="ciudad_proveedor" name="ciudad_proveedor" required>
    </div>
    <button type="submit" class="btn btn-primary">Agregar Proveedor</button>
  </form>
</div>


<div class="container mt-5">
  <form action="../actions/actionsProveedor/actualizarProveedor.php" method="post">
    <div>
      <h1 class="text-center mb-4">Actualizar Proveedor</h1>
    </div>

    <div class="mb-3">
  <label for="codigo_proveedor" class="form-label">Código de Proveedor</label>
  <input type="number" class="form-control" id="codigo_proveedor" name="codigo_proveedor" min="1" required>
</div>
<div class="mb-3">
  <label for="nombre_proveedor" class="form-label">Nombre del Proveedor:</label>
  <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor" required>
</div>
<div class="mb-3">
  <label for="direccion_proveedor" class="form-label">Direccion del Proveedor:</label>
  <input type="text" class="form-control" id="direccion_proveedor" name="direccion_proveedor" required>
</div>
<div class="mb-3">
  <label for="rtn_proveedor" class="form-label">Rtn del proveedor:</label>
  <input type="number" class="form-control" id="rtn_proveedor" name="rtn_proveedor" required>
</div>
<div class="mb-3">
  <label for="ciudad_proveedor" class="form-label">Ciudad Proveedor:</label>
  <input type="text" class="form-control" id="ciudad_proveedor" name="ciudad_proveedor" required>
</div>

<button type="submit" class="btn btn-primary">Actualizar Proveedor</button>

</form>
</div>



 

    

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
