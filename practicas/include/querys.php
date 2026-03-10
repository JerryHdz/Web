<?php

include 'conect.php';
//Aqui estarán mis consultas.
$Usuarios = "SELECT * FROM user";
$UsuariosE = $conexion -> query($Usuarios);


?>