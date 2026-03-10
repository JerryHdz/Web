<?php
include 'include/querys.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Plantilla</title>
</head>
<body>
    <h1 class="text-center mt-4">Plantila</h1>
    <!--- Inicia tabla --->
<div class="container">
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Nombre</th>
      <th scope="col">ApellidP</th>
      <th scope="col">ApellidoMaterno</th>
      <th scope="col">Tel</th>
      <th scope="col">Email</th>
      <th scope="col">FechadeNacimiento</th>
      <th scope="col">Opciones</th>
       
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php while ($row=$UsuariosE->fetch_assoc()){?>
      <th scope="row"><?php echo $row['Nombre']; ?></th>  
      <td><?php echo $row['ApellidoP']; ?></td>
      <td><?php echo $row['ApellidoM']; ?></td>
      <td><?php echo $row['Telefono']; ?></td>
      <td>Editar - <a href="include/Eliminar.php?idUser=<?php echo $row['eliminar'];?>">Eliminar</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
      <?php }?>
    </tr>

    
    
  </tbody>
</table>
</div>
    <!--- Termina tabla --->   
    <script rc="assets/js/bootstrap.min.js"></script>
</body>
</html>
