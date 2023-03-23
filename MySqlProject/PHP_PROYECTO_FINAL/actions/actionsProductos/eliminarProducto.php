<?php
$servidor="localhost";
$usuario="root";
$pass="keven190.,s";
$baseDatos="manjares";

$conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);

if($conexion->connect_error){
    die("Error en conexion". $conexion->connect_error);
} else {
    if (isset($_POST['codigo_producto'])) {
        $codigo_producto = $_POST['codigo_producto'];

        // eliminar los registros relacionados en tbl_productos_utilizan_acompanantes
        $consulta_utiliza = "DELETE FROM TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES WHERE CODIGO_PRODUCTO = $codigo_producto";
        if ($conexion->query($consulta_utiliza) === TRUE) {

            // eliminar los registros relacionados en proveedores_suministran_productos
            $consulta_suministra = "DELETE FROM PROVEEDORES_SUMINISTRAN_PRODUCTOS WHERE CODIGO_PRODUCTO = $codigo_producto";
            $conexion->query($consulta_suministra);

            // eliminar el producto
            $consulta = "DELETE FROM TBL_PRODUCTOS WHERE CODIGO_INVENTARIO = $codigo_producto";

            if ($conexion->query($consulta) === TRUE) {
                echo "Producto eliminado con éxito";
            } else {
                echo "Error al eliminar el producto: " . $conexion->error;
            }
        } else {
            echo "Error al eliminar los registros de tbl_productos_utilizan_acompanantes: " . $conexion->error;
        }
    }
    $conexion->close();
}
?>
