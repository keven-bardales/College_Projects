<?php
$servidor="localhost";
$usuario="root";
$pass="keven190.,s";
$baseDatos="manjares";

$conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);
if($conexion->connect_error){
    die("Error en conexion". $conexion->connect_error);
} else {
    if (isset($_POST['codigo_acompanante'], $_POST['codigo_producto'])) {
        $codigo_acompanante = $_POST['codigo_acompanante'];
        $codigo_producto = $_POST['codigo_producto'];
actualizarProductosutilizanacompañantes         

        $consulta = "UPDATE TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES SET CODIGO_ACOMPANANTE='$codigo_acompanante', CODIGO_PRODUCTO='$codigo_producto'
                     WHERE CODIGO_ACOMPANANTE=$codigo_acompanante";

        if ($conexion->query($consulta) === TRUE) {
            echo "Productos utilizan acompañantes actualizado con éxito";
        } else {
            echo "Error al actualizar productos utilizan acomañantes: " . $conexion->error;
        }
    }
    $conexion->close();
}
?>
