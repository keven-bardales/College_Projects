<?php
$servidor="localhost";
$usuario="root";
$pass="keven190.,s";
$baseDatos="manjares";


$conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);
if($conexion->connect_error){
    die("Error en conexion". $conexion->connect_error);
}else{

    if(empty($_POST["nombre_producto"])){
        echo "El nombre del producto no se asigno";
    }else{
        $nombre_producto = $_POST["nombre_producto"];
    }


    if(empty($_POST["ubicacion_bodega"])){
        echo "La ubicacion en bodega no se asigno";
    }else{
        $ubicacion_bodega = $_POST["ubicacion_bodega"]; 
    }

    if(empty($_POST["precio_venta"])){
        echo "El precio de venta no se asigno";
    }else{
        $precio_venta =  floatval($_POST["precio_venta"]);
    }

    if(empty($_POST["cantidad_actual"])){
        echo "La cantidad actual no se asigno";
    }else{
        $cantidad_actual = intval($_POST["cantidad_actual"]);
    }

    if(empty($_POST["codigo_restaurante"])){
        echo "El codigo restaurante no se asigno";  
    }else{
        $codigo_restaurante = intval($_POST["codigo_restaurante"]);
    }

    $consulta = "INSERT INTO TBL_PRODUCTOS (CODIGO_INVENTARIO, NOMBRE_PRODUCTO, UBICACION_BODEGA
    , PRECIO_VENTA, CANTIDAD_ACTUAL, CODIGO_RESTAURANTE) VALUES 
    (NULL, '$nombre_producto', '$ubicacion_bodega', $precio_venta, $cantidad_actual,
    $codigo_restaurante)";

    if ($conexion->query($consulta)==true){
        echo "Producto almacenado con exito";
    }else{
        echo "Error al ingresar el producto. El Error es: " .$conexion->error;
    }

    $conexion->close(); 

}







?>