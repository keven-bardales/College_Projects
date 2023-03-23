<!DOCTYPE html>
<html>
  <head>
    <title>Productos por proveedor y ciudad</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
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

  <div class="container">
  <h1 class="mt-5">Productos por proveedor y ciudad</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Proveedor</th>
        <th>Ciudad</th>
        <th>Productos</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $servidor = "localhost";
      $username = "root";
      $password = "keven190.,s";
      $baseDatos = "manjares";

      $conn = new mysqli($servidor, $username, $password, $baseDatos);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT tbl_proveedores.NOMBRE_PROVEEDOR AS Proveedor, tbl_proveedores.CIUDAD_PROVEEDOR AS Ciudad, GROUP_CONCAT(DISTINCT tbl_productos.NOMBRE_PRODUCTO ORDER BY tbl_productos.NOMBRE_PRODUCTO ASC SEPARATOR ', ') AS Productos
              FROM tbl_proveedores
              LEFT JOIN tbl_telefonos_proveedor ON tbl_proveedores.CODIGO_PROVEEDOR = tbl_telefonos_proveedor.CODIGO_PROVEEDOR
              LEFT JOIN proveedores_suministran_productos ON tbl_proveedores.CODIGO_PROVEEDOR = proveedores_suministran_productos.CODIGO_PROVEEDOR
              LEFT JOIN tbl_productos ON proveedores_suministran_productos.CODIGO_PRODUCTO = tbl_productos.CODIGO_INVENTARIO
              WHERE tbl_proveedores.CIUDAD_PROVEEDOR IN ('Tegucigalpa', 'San Pedro Sula')
              GROUP BY tbl_proveedores.NOMBRE_PROVEEDOR, tbl_proveedores.CIUDAD_PROVEEDOR;
            ";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>" . $row["Proveedor"] . "</td>
              <td>" . $row["Ciudad"] . "</td>
              <td>" . $row["Productos"] . "</td>
            </tr>";
    }
  } else {
    echo "<p>No hay proveedores con productos registrados en las ciudades de Tegucigalpa o San Pedro Sula.</p>";
  }

  $conn->close();
?>
  </div>
  </body>
</html>