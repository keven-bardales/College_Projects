<?php

$conexion = mysqli_connect("localhost", "root", "keven190.,s", "manjares");


$sql = "SELECT * FROM tbl_bitacoras ORDER BY FECHA_HORA_OPERACION DESC";

$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bitácoras Menú</title>
	<meta charset="utf-8">
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
		<h1>Bitácoras Menú</h1>
		<table class="table">
			<thead>
				<tr>
					<th>Fecha y Hora</th>
					<th>Descripción</th>
				</tr>
			</thead>
			<tbody>
				<?php
			
				while ($fila = mysqli_fetch_assoc($resultado)) {
					echo "<tr>";
					echo "<td>" . $fila['FECHA_HORA_OPERACION'] . "</td>";
					echo "<td>" . $fila['DESCRIPCION'] . "</td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
