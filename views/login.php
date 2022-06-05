<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    
    <!-- Librerias Bootstrap -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleCentrar.css">
    <link rel="stylesheet" href="../css/validacionesLogin.css">

    <!--CDNs externos-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
</head>
<body>

    <div class="centrar">
        <div class=" m-5 mx-auto border-light" >
            <div class="container card">
                <div class="card-body">
                <div class="d-flex justify-content-center"><img src="../img/icono.svg" height="120" alt=""></div>
                <div class="d-flex justify-content-center"><h4 class="card-title mb-4">Iniciar Sesión</h4></div>
                            
                <form action="./../php/InSesADMIN.php" name="Inicioses2" method="post">
                    <div class="form-group p-3">
                        <label for="correo">Correo electrónico.</label>
                        <div class="fomulario__input__input correcto">
                            <input  name="correo" class="form-control" placeholder="ex. name@gmail.com" type="email" style="font-size: 1.5rem;" id="correo">                    
                        </div>
                        <p class="fomulario__input__error" id="fomulario__input__error">
                            Formato de correo electrónico incorrecto
                        </p>
                        <div id="emailHelp" class="form-text">
                            Nota: Utiliza el correo que te ha proporcionado la empresa.
                        </div>
                    </div> <!-- form-group// -->
                    <div class="form-group p-3">
                        <div class="d-flex justify-content-between">
                            <label for="pass">Contraseña</label>
                            <a class="card-link" href="#">¿Has olvidado la contraseña?</a>
                        </div>
                        <input  name="pass" class="form-control" placeholder="******" 
                                type="password" style="font-size: 1.5rem;" id="pass" value="">
                    </div> <!-- form-group// --> 

                    <div class="formulario__mensaje" id="formulario__mensaje">
                        <p>
                            <i class="bi bi-exclamation-triangle"></i> 
                            <b>Error:</b> 
                            Por favor rellena el formulario correctamente (campo correo).
                        </p>
                    </div>

                    <div class="form-group p-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-outline-dark" style="font-size: 1.5rem;" id="enviar">
                            Iniciar sesión
                        </button>
                    </div> <!-- form-group// -->    

                </form>

                </div> <!-- card-body.// -->
                <div class="card-footer text-center">
                    <div class="d-flex justify-content-center">
                        <p class="mt-4 mb-3 text-muted">© 2022 ComSafe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

<!-- Librerias Bootstrap -->
<script src="../lib/bootstrap/js/bootstrap.min.js" ></script>

<!-- Librerias Propias -->
<script src="../js/validaciones/validacionLogin.js" ></script>

</html>