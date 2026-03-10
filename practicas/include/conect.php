<?php 
//Declarar las variables necesarías para la conexio
    $Servidor = "Localhost";
    $Usuario = "root";
    $Pass ="";
    $BaseDeDatos ="clase";
//Crear variable y metodo de conexión
$conexion= new mysqli ($Servidor, $Usuario, $Pass, $BaseDeDatos);
    if ($conexion->connect_error)
            {
            die ("error al conectar la base de datos".$conexion->connect_error);
            }

?>