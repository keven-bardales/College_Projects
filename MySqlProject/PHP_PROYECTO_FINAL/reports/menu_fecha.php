<!DOCTYPE html>
<html>
  <head>
    <title>Platos del Menú por Fecha</title>
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
      <h1 class="mt-5">Platos del Menú por Fecha</h1>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label for="fecha">Seleccione la fecha:</label>
          <input type="date" class="form-control" id="fecha" name="fecha">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
      </form>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $fecha = $_POST["fecha"];
          $servidor = "localhost";
          $username = "root";
          $password = "keven190.,s";
          $baseDatos = "manjares";

          $conn = new mysqli($servidor, $username, $password, $baseDatos);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT tbl_platos.nombre_plato AS Plato
                  FROM tbl_platos
                  JOIN tbl_platos_en_menu ON tbl_platos.CODIGO_plato = tbl_platos_en_menu.CODIGO_plato
                  JOIN tbl_menus_diarios ON tbl_platos_en_menu.CODIGO_MENU = tbl_menus_diarios.CODIGO_menu
                  WHERE DATE(tbl_menus_diarios.FECHA_ELABORACION) = '$fecha';";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            echo "<table class='table'>
                    <thead>
                      <tr>
                        <th>Plato</th>
                      </tr>
                    </thead>
                    <tbody>";
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["Plato"] . "</td></tr>";
            }
            echo "</tbody></table>";
          } else {
            echo "<p>No hay platos en el menú para la fecha seleccionada.</p>";
          }

          $conn->close();
        }
      ?>
    </div>
  </body>
</html>
