<?php
$servidor="localhost";
$usuario="root";
$pass="keven190.,s";
$baseDatos="manjares";

$conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);
if($conexion->connect_error){
    die("Error en conexion". $conexion->connect_error);
} else {
    if (isset($_POST['codigo_acompanante'], $_POST['nombre_acompanante'], $_POST['precio_acompanante'])) {
        $codigo_acompanante = $_POST['codigo_acompanante'];
        $nombre_acompanante = $_POST['nombre_acompanante'];
        $precio_acompanante = floatval($_POST['precio_acompanante']);

        $consulta = "UPDATE TBL_ACOMPANANTES SET NOMBRE_ACOMPANANTE='$nombre_acompanante', PRECIO_ACOMPANANTE=$precio_acompanante 
                     WHERE CODIGO_ACOMPANANTE=$codigo_acompanante";

        if ($conexion->query($consulta) === TRUE) {
            echo "Acompañante actualizado con éxito";
        } else {
            echo "Error al actualizar el acompañante: " . $conexion->error;
        }
    }
    $conexion->close();
}
?>
