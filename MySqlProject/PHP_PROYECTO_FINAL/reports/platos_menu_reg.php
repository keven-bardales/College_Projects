<!DOCTYPE html>
<html>
  <head>
    <title>Platos y Acompañantes del Menú</title>
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
      <h1 class="mt-5">Platos y Acompañantes del Menú</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Código del Menú</th>
            <th>Plato</th>
            <th>Acompañantes</th>
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

          $sql = "SELECT tbl_menus_diarios.CODIGO_menu AS Codigo_Menu, tbl_menus_diarios.FECHA_ELABORACION AS Fecha, tbl_platos_en_menu.CODIGO_plato AS Codigo_Plato, tbl_platos.nombre_plato AS Plato, GROUP_CONCAT(DISTINCT tbl_acompanantes.nombre_acompanante ORDER BY tbl_acompanantes.nombre_acompanante ASC SEPARATOR ', ') AS Acompanantes
          FROM tbl_platos_en_menu
          LEFT JOIN tbl_menus_diarios ON tbl_platos_en_menu.CODIGO_MENU = tbl_menus_diarios.CODIGO_menu
          LEFT JOIN tbl_platos ON tbl_platos_en_menu.CODIGO_plato = tbl_platos.CODIGO_plato
          LEFT JOIN tbl_acompanantes_forman_platos ON tbl_platos.CODIGO_plato = tbl_acompanantes_forman_platos.CODIGO_plato
          LEFT JOIN tbl_acompanantes ON tbl_acompanantes_forman_platos.CODIGO_acompanante = tbl_acompanantes.CODIGO_acompanante
          GROUP BY tbl_menus_diarios.CODIGO_menu, tbl_platos_en_menu.CODIGO_plato;
          ";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>" . $row["Fecha"] . "</td>
                  <td>" . $row["Codigo_Menu"] . "</td>
                  <td>" . $row["Codigo_Plato"] . "</td>
                  <td>" . $row["Plato"] . "</td>
                  <td>" . $row["Acompanantes"] . "</td>
                </tr>";
        }
        echo "</tbody></table>";
      } else {
        echo "<p>No hay platos en los menús registrados.</p>";
      }

      $conn->close();
    ?>
  </div>

  </body>
</html>
