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
            <a class="nav-link" href="../vistas/menu.php">Menú</a>   
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../index.php#reportesId">Reportes</a>
        </li>

        </ul>
      </div>
    </nav>

  <div class="container mt-5">
  <form action="../actions/actionsAcompanantes/agregarAcompanantes.php" method="post">
    <div>
    <h1 class="text-center mb-4">Agregar nuevo Acompañante</h1>
    </div>

    <div class="mb-3">
      <label for="nombre_acompanante" class="form-label">Nombre del Acompañante:</label>
      <input type="text" class="form-control" id="nombre_acompanante" name="nombre_acompanante" required>
    </div>
    <div class="mb-3">
      <label for="precio_acompanante" class="form-label">Precio del Acompañante:</label>
      <input type="number" class="form-control" id="precio_acompanante" name="precio_acompanante" min="0" step="0.01" r required>
    </div>
    <button type="submit" class="btn btn-primary">Agregar Acompañante</button>
  </form>
</div>


<div class="container mt-5">
    <form action="../actions/actionsAcompanantes/actualizarAcompanante.php" method="post">
      <div>
        <h1 class="text-center mb-4">Actualizar Acompañante</h1>
      </div>
      <div class="mb-3">
        <label for="codigo_acompanante" class="form-label">Código del Acompañante:</label>
        <input type="number" class="form-control" id="codigo_acompanante" name="codigo_acompanante" min="1" required>
      </div>
      <div class="mb-3">
        <label for="nombre_acompanante" class="form-label">Nombre del Acompañante:</label>
        <input type="text" class="form-control" id="nombre_acompanante" name="nombre_acompanante" required>
      </div>
      <div class="mb-3">
        <label for="precio_acompanante" class="form-label">Precio del Acompañante:</label>
        <input type="number" class="form-control" id="precio_acompanante" name="precio_acompanante" min="0" step="0.01" required>
      </div>
      <button type="submit" class="btn btn-primary">Actualizar Acompañante</button>
    </form>
  </div>


 

    

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
