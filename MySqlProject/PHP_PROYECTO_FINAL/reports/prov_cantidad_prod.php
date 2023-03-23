<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de proveedores y productos</title>
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

  <div class="container my-5">
    <h2>Lista de proveedores y productos</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Proveedor</th>
          <th>Cantidad de productos</th>
        </tr>
      </thead>
      <tbody>
    

        <?php
        
          $conn = new mysqli('localhost', 'root', 'keven190.,s', 'manjares');

          if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
          }

          $sql = "SELECT tbl_proveedores.NOMBRE_PROVEEDOR AS Proveedor, COUNT(tbl_productos.CODIGO_INVENTARIO) AS CantidadProductos 
          FROM tbl_proveedores 
          LEFT JOIN proveedores_suministran_productos ON tbl_proveedores.CODIGO_PROVEEDOR = proveedores_suministran_productos.CODIGO_PROVEEDOR 
          LEFT JOIN tbl_productos ON proveedores_suministran_productos.CODIGO_PRODUCTO = tbl_productos.CODIGO_INVENTARIO 
          GROUP BY tbl_proveedores.NOMBRE_PROVEEDOR";

          
          $result = $conn->query($sql);

     
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["Proveedor"] . "</td><td>" . $row["CantidadProductos"] . "</td></tr>";
            }
          } else {
            echo "<tr><td colspan='2'>No se encontraron resultados.</td></tr>";
          }

          $conn->close();
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
