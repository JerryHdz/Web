<?php 
include 'conect.php';
$Id = $_GET['Id'];
echo ""
$eliminar = "DELETE FROM user WHERE Id_usuario=$Id"
$eliminarE = $conexion->query($eliminar);
if($eliminarE >0 ){
    header("location:../lista.php");
}

?>