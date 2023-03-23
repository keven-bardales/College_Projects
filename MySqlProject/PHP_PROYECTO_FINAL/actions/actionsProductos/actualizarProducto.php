<?php
$servidor="localhost";
$usuario="root";
$pass="keven190.,s";
$baseDatos="manjares";

$conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);
if($conexion->connect_error){
    die("Error en conexion". $conexion->connect_error);
} else {
    if (isset($_POST['codigo_inventario'])) {
        $codigo_inventario = $_POST['codigo_inventario'];
        $nombre_producto = $_POST['nombre_producto'];
        $ubicacion_bodega = $_POST['ubicacion_bodega'];
        $precio_venta = floatval($_POST['precio_venta']);
        $cantidad_actual = intval($_POST['cantidad_actual']);
        $codigo_restaurante = intval($_POST['codigo_restaurante']);

        $consulta = "UPDATE TBL_PRODUCTOS SET NOMBRE_PRODUCTO='$nombre_producto', UBICACION_BODEGA='$ubicacion_bodega', 
                     PRECIO_VENTA=$precio_venta, CANTIDAD_ACTUAL=$cantidad_actual, CODIGO_RESTAURANTE=$codigo_restaurante 
                     WHERE CODIGO_INVENTARIO=$codigo_inventario";

        if ($conexion->query($consulta) === TRUE) {
            echo "Producto actualizado con éxito";
        } else {
            echo "Error al actualizar el producto: " . $conexion->error;
        }
    }
    $conexion->close();
}
?>