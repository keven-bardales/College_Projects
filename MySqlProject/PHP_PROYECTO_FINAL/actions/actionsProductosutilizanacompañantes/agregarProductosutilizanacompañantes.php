<?php
$servidor="localhost";
$usuario="root";
$pass="keven190.,s";
$baseDatos="manjares";


$conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);
if($conexion->connect_error){
    die("Error en conexion". $conexion->connect_error);
}else{

    if(empty($_POST["codigo_acompanante"])){
        echo "El codigo del acompañante no se asigno";
    }else{
        $codigo_acompanante = $_POST["codigo_acompanante"];
    }


    if(empty($_POST["codigo_producto"])){
        echo "La código del producto no se asigno";
    }else{
        $codigo_producto = $_POST["codigo_producto"]; 
    }
 
    $consulta = "INSERT INTO TBL_PRODUCTOS_UTILIZAN_ACOMPANANTES (CODIGO_ACOMPANANTE, CODIGO_PRODUCTO) VALUES 
    ($codigo_producto, $codigo_acompanante)";

    if ($conexion->query($consulta)==true){
        echo "Producto utilizado para acompañante almacenado con exito";
    }else{
        echo "Error al ingresar el producto utilizado en el acompañante . El Error es: " .$conexion->error;
    }

    $conexion->close(); 

}







?>