<!DOCTYPE html>
<html>
  <head>
    <title>Platos con Acompañante Puré</title>
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
      <h1>Platos con Acompañante Puré</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Plato</th>
            <th>Acompañante</th>
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

            $sql = "SELECT tbl_platos.Nombre_Plato AS Plato, TBL_ACOMPANANTES.NOMBRE_ACOMPANANTE AS Acompanante
                    FROM TBL_PLATOS
                    JOIN TBL_ACOMPANANTES_FORMAN_PLATOS  ON tbl_platos.CODIGO_plato = TBL_ACOMPANANTES_FORMAN_PLATOS.CODIGO_plato
                    JOIN TBL_ACOMPANANTES  ON TBL_ACOMPANANTES_FORMAN_PLATOS.CODIGO_ACOMPANANTE = TBL_ACOMPANANTES.CODIGO_ACOMPANANTE
                    WHERE TBL_ACOMPANANTES.NOMBRE_ACOMPANANTE = 'Pure de papa';" ;

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["Plato"]. "</td><td>" . $row["Acompanante"] . "</td></tr>";
              }
            } else {
              echo "<tr><td colspan='2'>No hay platos con acompañante puré.</td></tr>";
            }

            $conn->close();
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
