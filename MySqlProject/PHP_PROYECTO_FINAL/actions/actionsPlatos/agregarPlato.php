<?php
$servidor="localhost";
$usuario="root";
$pass="keven190.,s";
$baseDatos="manjares";


$conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);
if($conexion->connect_error){
    die("Error en conexion". $conexion->connect_error);
}else{

    

    if(empty($_POST["nombre_plato"])){
        echo "El nombre del plato no se asigno";
    }else{
        $nombre_plato = $_POST["nombre_plato"]; 
    }

    if(empty($_POST["precio_plato"])){
        echo "El precio del plato no se asigno";
    }else{
        $precio_plato =  floatval($_POST["precio_plato"]);
    }

 
    $consulta = "INSERT INTO TBL_PLATOS (NOMBRE_PLATO, PRECIO_PLATO, FECHA_HORA_MODIFICACION, FECHA_HORA_CREACION) 
    VALUES ('$nombre_plato', $precio_plato, NOW(), NOW())";


    if ($conexion->query($consulta)==true){
        echo "Plato almacenado con exito";
    }else{
        echo "Error al ingresar el plato. El Error es: " .$conexion->error;
    }

    $conexion->close(); 

}







?>