<?php
$servidor="localhost";
$usuario="root";
$pass="keven190.,s";
$baseDatos="manjares";


$conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);
if($conexion->connect_error){
    die("Error en conexion". $conexion->connect_error);
}else{

    if(empty($_POST["nombre_acompanante"])){
        echo "El nombre del acompanante no se asigno";
    }else{
        $nombre_acompanante = $_POST["nombre_acompanante"];
    }


    if(empty($_POST["precio_acompanante"])){
        echo "El precio del acompañante no se asigno";
    }else{
        $precio_acompanante = floatval($_POST["precio_acompanante"]) ; 
    }

   

    $consulta = "INSERT INTO TBL_ACOMPANANTES (NOMBRE_ACOMPANANTE, PRECIO_ACOMPANATE) VALUES ('$nombre_acompanante',  $precio_acompanante)";


    if ($conexion->query($consulta)==true){
        echo "Acompañante almacenado con exito";
    }else{
        echo "Error al ingresar el Acompañante. El Error es: " .$conexion->error;
    }

    $conexion->close(); 

}







?>