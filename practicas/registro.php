<?php
error_reporting(0);
    require 'include/conect.php';
    if($_POST['BtnRegistro']){
   
   $Nombre = $conexion->real_escape_string($_POST['Nombre']);
   $Ap = $conexion->real_escape_string($_POST['Ap']);
   $Am = $conexion->real_escape_string($_POST['Am']);
   $Tel = $conexion->real_escape_string($_POST['Telefono']);
   $Email = $conexion->real_escape_string($_POST['Email']);
   $Pass1 = $conexion->real_escape_string($_POST['Pw']);
   $Pass2 = $conexion->real_escape_string($_POST['Pw1']);
   $Fecha = $conexion->real_escape_string($_POST['Fecha']);
   $UserN = $conexion->real_escape_string($_POST['UserNick']);
   
    if ($Nombre == "")
        {$Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
         <strong>Error: </strong> Por favor digita tu nombre (ES OBLIGATORIO)
         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        }
            elseif($Ap == "")
                {$Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error: </strong> Por favor digita tu apellido paterno (ES OBLIGATORIO)
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }

                elseif($Am == "")
                {$Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error: </strong> Por favor digita tu apellido materno(ES OBLIGATORIO)
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }

                elseif($Tel == "")
                {$Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error: </strong> Por favor digita tu telefono (ES OBLIGATORIO)
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }
    

                elseif($Email == "")
                {$Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error: </strong> Por favor digita tu email(ES OBLIGATORIO)
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }

                elseif($Pass1 == "")
                {$Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error: </strong> Por favor digita tu password (ES OBLIGATORIO)
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }

                elseif($Pass2 == "")
                {$Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error: </strong> Por favor confirma tu password (ES OBLIGATORIO)
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }

                elseif($Fecha == "")
                {$Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error: </strong> Por favor digita tu fecha de nacimiento (ES OBLIGATORIO)
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }

                elseif($UserN == "")
                {$Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error: </strong> Por favor digita tu usernick (ES OBLIGATORIO)
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }

                else
                {
                    if($Pass1 != $Pass2)
                    {$Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Error: </strong> (Tu password no coincide, verifica que sean correctas.)
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";}

                    else{
                        $Registra = "INSERT INTO user
                        (Nombre, ApellidoP, ApellidoM, FechaNac, Telefono, Email, UserNick, Password)
                        Values('$Nombre','$Ap','$Am','$Fecha','$Tel','$Email','$UserN','$Pass1')";
                        $RegistroE = $conexion->query($Registra);
                        if($RegistroE >0)
                            {$Mensaje.="<div class='alert alert-info alert-dismissible fade show' role='alert'>
                        <strong>Excelente!! : </strong> Los datos están en la base de datos de manera correcta.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                            }
                        }
                }
    }
?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>Inicio de sistema | Sys_EEC</title>
    </head>
    <body>
        
    <div class="container mt-5 ">
<div class="row">
    <?php echo $Mensaje; ?>
</div>


            <h1 class="text-center">Inicio del sistema</h1>
             <p class="text-center">Registrate para iniciar en el sistema</p>
    </div>
<!--inicia el slider-->
    <div class="row mt-2">
<div class="col"></div>
<div class="col"></div>
<div class="col">

    <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Menu</button>
    </div>
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...
  </div>
</div>
        </div>

            <!--Inicia el form-->
            <div class="row mt-2">
                <div class="col-sm-1 col-md-2 col-lg-2"></div>
                <div class="col-sm-10 col-md-8 col-lg-8">
                    <form action="" method="post">
                        <div class="row-mt2">
                            <input type="text" name="Nombre" id="nombre" placeholder="Nombre" class="form-control">
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <input type="text" name="Ap" id="ap" placeholder="Apellido Paterno"class="form-control">
                            </div>
                            <div class="col">
                                <input type="text" name="Am" id="am" placeholder="Apellido Materno"class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <input type="tel" name="Telefono" id="telefono" placeholder="Telefono" class="form-control">
                            </div>
                            <div class="col">
                                <input type="text" name="Email" id="email"placeholder="Email" class="form-control">
                            </div>
                        </div>       
                        

                        <div class="row mt-2">
                            <div class="col">
                                <input type="password" name="Pw" id="pw" placeholder="Digita tu password" class="form-control">
                            </div>
                            <div class="col">
                                <input type="password1" name="Pw1" id="pw1"placeholder="Confirma tu password" class="form-control">
                            </div>
                        </div>  

                        <div class="row mt-2">
                            <div class="col">
                                <input type="date" name="Fecha" id="fh"  class="form-control">
                            </div>
                            <div class="col">
                                <input type="text" name="UserNick" id="usernick"placeholder="digita tu nombre de usuario" class="form-control">
                            </div>
                        </div>  



                    <div class="row mt 2">
                <input type="submit" value="registrar"name ="BtnRegistro" class="btn btn-info">
                    </div>

                        
                    </form>
                </div>
                <div class="col-sm-1 col-md-2 col-lg-2"></div>
            </div>
  
    
    
    </div>
    <!--Termina formulario-->
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
    </html>