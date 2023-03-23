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


    if(empty($_POST["codigo_plato"])){
        echo "El codigo del plato no se asigno";
    }else{
        $codigo_plato = $_POST["codigo_plato"]; 
    }
 
    $consulta = "INSERT INTO TBL_ACOMPANANTES_FORMAN_PLATOS (CODIGO_ACOMPANANTE, CODIGO_PLATO) VALUES 
    ($codigo_acompanante, $codigo_plato)";

    if ($conexion->query($consulta)==true){
        echo "Acompañante para plato almacenado con exito";
    }else{
        echo "Error al ingresar el acompañante del plato. El Error es: " .$conexion->error;
    }

    $conexion->close(); 

}







?>