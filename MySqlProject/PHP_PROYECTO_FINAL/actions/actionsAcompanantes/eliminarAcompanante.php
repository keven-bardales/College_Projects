<?php
$servidor="localhost";
$usuario="root";
$pass="keven190.,s";
$baseDatos="manjares";

$conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);
if ($conexion->connect_error) {
    die("Error en conexion: " . $conexion->connect_error);
}

if (isset($_POST['codigo_acompanante'])) {
    $codigo_acompanante = $_POST['codigo_acompanante'];

    // Eliminar de la tabla TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES
    $consulta = "DELETE FROM TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES WHERE CODIGO_ACOMPANANTE=$codigo_acompanante";
    if ($conexion->query($consulta) === FALSE) {
        echo "Error al eliminar el acompañante de la tabla TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES: " . $conexion->error;
        $conexion->close();
        exit();
    }

    // Eliminar de la tabla TBL_ACOMPANANTES
    $consulta = "DELETE FROM TBL_ACOMPANANTES WHERE CODIGO_ACOMPANANTE=$codigo_acompanante";
    if ($conexion->query($consulta) === TRUE) {
        echo "Acompañante eliminado con éxito";
    } else {
        echo "Error al eliminar el acompañante de la tabla TBL_ACOMPANANTES: " . $conexion->error;
    }
}

$conexion->close();
?>
