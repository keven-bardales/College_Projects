<?php
$servidor="localhost";
$usuario="root";
$pass="keven190.,s";
$baseDatos="manjares";

$conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);
if($conexion->connect_error){
    die("Error en conexion". $conexion->connect_error);
} else {
    if (isset($_POST['nombre_proveedor'], $_POST['direccion_proveedor'], $_POST['rtn_proveedor'], $_POST['ciudad_proveedor'])) {
        $codigo_proveedor = $_POST['codigo_proveedor'];
        $nombre_proveedor = $_POST['nombre_proveedor'];
        $direccion_proveedor = $_POST['direccion_proveedor'];
        $rtn_proveedor = floatval($_POST['rtn_proveedor']);
        $ciudad_proveedor = $_POST['ciudad_proveedor'];

        $consulta = "UPDATE TBL_PROVEEDORES SET NOMBRE_PROVEEDOR='$nombre_proveedor', DIRECCION_PROVEEDOR='$direccion_proveedor', 
                     RTN_PROVEEDOR=$rtn_proveedor, CIUDAD_PROVEEDOR='$ciudad_proveedor' 
                     WHERE CODIGO_PROVEEDOR=$codigo_proveedor";

        if ($conexion->query($consulta) === TRUE) {
            echo "Proveedor actualizado con éxito";
        } else {
            echo "Error al actualizar el proveedor: " . $conexion->error;
        }
    }
    $conexion->close();
}
?>
