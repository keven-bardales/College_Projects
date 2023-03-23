<?php
$servidor="localhost";
$usuario="root";
$pass="keven190.,s";
$baseDatos="manjares";


$conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);
if($conexion->connect_error){
    die("Error en conexion". $conexion->connect_error);
}else{

    if(empty($_POST["codigo_proveedor"])){
        echo "El codigo del proveedor no se asigno";
    }else{
        $codigo_proveedor = intval($_POST["codigo_proveedor"]);
    }


    if(empty($_POST["nombre_proveedor"])){
        echo "El nombre de proveedor no se asigno";
    }else{
        $nombre_proveedor = $_POST["nombre_proveedor"]; 
    }

    if(empty($_POST["direccion_proveedor"])){
        echo "El precio de venta no se asigno";
    }else{
        $direccion_proveedor = $_POST["direccion_proveedor"];
    }

    if(empty($_POST["rtn_proveedor"])){
        echo "La cantidad actual no se asigno";
    }else{
        $rtn_proveedor = $_POST["rtn_proveedor"];
    }

    if(empty($_POST["ciudad_proveedor"])){
        echo "El codigo restaurante no se asigno";  
    }else{
        $ciudad_proveedor = $_POST["ciudad_proveedor"];
    }

    $consulta = "INSERT INTO TBL_PROVEEDORES (CODIGO_PROVEEDOR, NOMBRE_PROVEEDOR, DIRECCION_PROVEEDOR
    , RTN_PROVEEDOR, CIUDAD_PROVEEDOR) VALUES 
    ($codigo_proveedor, '$nombre_proveedor', '$direccion_proveedor', '$rtn_proveedor', '$ciudad_proveedor')";

    if ($conexion->query($consulta)==true){
        echo "Proveedor almacenado con exito";
    }else{
        echo "Error al ingresar el Proveedor. El Error es: " .$conexion->error;
    }

    $conexion->close(); 

}







?>