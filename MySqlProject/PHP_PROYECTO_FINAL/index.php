<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi sitio web</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  

  <div class="container my-5">
  <div class="card-deck">
    <div class="col-md-4">
      <div class="card h-100">
        <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="Productos">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Productos</h5>
          <p class="card-text">Ingresar, modificar y eliminar productos.</p>
          <a href="./vistas/productos.php" class="btn btn-primary mt-auto">Ir a productos</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100">
        <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="Proveedores">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Proveedores</h5>
          <p class="card-text">Ingresar, modificar y eliminar proveedores.</p>
          <a href="./vistas/proveedores.php" class="btn btn-primary mt-auto">Ir a proveedores</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100">
        <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="Acompañantes">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Acompañantes</h5>
          <p class="card-text">Ingresar, modificar y eliminar acompañantes.</p>
          <a href="./vistas/acompanantes.php" class="btn btn-primary mt-auto">Ir a acompañantes</a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container my-5">
  <div class="card-deck">
    <div class="col-md-4">
      <div class="card h-100">
        <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="Productos">
        <div class="card-body d-flex flex-column">
        <h5 class="card-title">Productos por acompañantes</h5>
            <p class="card-text">Ingresar, modificar y eliminar productos por acompañantes.</p>
          <a href="./vistas/productosutilizanacompañantes.php" class="btn btn-primary mt-auto">Ir a productos</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100">
        <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="Proveedores">
        <div class="card-body d-flex flex-column">
        <h5 class="card-title">Platos</h5>
            <p class="card-text">Ingresar, modificar y eliminar platos.</p>
          <a href="./vistas/platos.php" class="btn btn-primary mt-auto">Ir a Platos</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100">
        <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="Acompañantes">
        <div class="card-body d-flex flex-column">
        <h5 class="card-title">Acompañantes por plato</h5>
            <p class="card-text">Ingresar, modificar y eliminar acompañantes por plato.</p>
            <a href="./vistas/acompañantesplato.php" class="btn btn-primary">Ir a acompañantes por plato</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="reportesId" class="container my-5">
  <h2 >Reportes</h2>
  <hr>
  <div class="row">
    <div class="col-md-4">
      <a href="./reports/pure.php">Platos con puré</a>
    </div>
    <div class="col-md-4">
      <a href="./reports/menu_fecha.php">Menú por fecha</a>
    </div>

    <div class="col-md-4">

    <a href="./reports/platos_menu_reg.php">Platos Menu registrados</a>
    </div>

    <div class="col-md-4">

    <a href="./reports/prov_sps_tegu.php">Platos Menu registrados</a>
    </div>

    
    <div class="col-md-4">

    <a href="./reports/prov_cantidad_prod.php">Cantidad Productos Proveedores</a>
    </div>

    <div class="col-md-4">

    <a href="./reports/bitacoras_menu.php">Bitacoras Menu</a>
    </div>
  </div>
</div>





    

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
