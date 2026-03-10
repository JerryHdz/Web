<?php
include 'include/conect.php';
include 'include/querys.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Control de usuarios </title>
</head>
<body>
        <div class="container">
            <h1 class="text-center">Consulta de usuarios </h1>
            <div class="row mt-3"></div>
<!--Inicia la tabla de usuarios-->

<table class="table">
  <thead>
    <tbody>
            <tr>

      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">ApellidoPaterno</th>
      <th scope="col">ApellidoMaterno</th>
      <th scope="col">FechaN</th>
       <th scope="col">Telefono</th>
        <th scope="col">Email</th>
        <th scope="col">UserNick</th>
        <th scope="col">Opciones> </th>
            </tr>
    </thead>


        <tbody>
    <tr>

    <?php
while($row = $UsuariosE->fetch_assoc()){
?>
      <th scope="row"><?php echo $row['Id_usuario']?></th>
      <td><?php echo $row['Nombre']?></td>
      <td><?php echo $row['ApellidoP']?></td>
      <td><?php echo $row['ApellidoM']?></td>
      <td><?php echo $row['FechaNac']?></td>
      <td><?php echo $row['Telefono']?></td>
      <td><?php echo $row['Email']?></td>
      <td><?php echo $row['UserNick']?></td>
      <td>Editar - <a href = "include/Eliminar.php?id=<?php echo $row['Id_usuario'];?>">Eliminar</a></Td>
     
      
      
    </tr>
   <?php }?>
  </tbody>
</table>
<!--termina la tabla de usuarios-->


        </div>
                <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>