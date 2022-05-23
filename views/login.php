<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    
    <!-- Librerias Bootstrap -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    
    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">

    <!--CDNs externos-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
</head>
<body>
    
    <div class="ancho-ini m-5 mx-auto border-light" >
        <div class="container card">
            <div class="card-body">
            <div class="d-flex justify-content-center"><img src="../img/icono.svg" width="160" height="120" alt=""></div>
            <div class="d-flex justify-content-center"><h4 class="card-title mb-4">Iniciar Sesión</h4></div>
                        
            <form action="php/InSesADMIN.php" name="Inicioses2" method="post">
                <div class="form-group p-3">
                    <label>Correo electrónico</label>
                    <input name="correo" class="form-control" placeholder="ex. name@gmail.com" type="email" style="font-size: 1.5rem;">
                    <div id="emailHelp" class="form-text">Utiliza el correo que te ha proporcionado la empresa.</div>
                </div> <!-- form-group// -->
                <div class="form-group p-3">
                    <div class="d-flex justify-content-between">
                        <label>Contraseña</label>
                        <a class="card-link" href="#">¿Has olvidado la contraseña?</a>
                    </div>
                    <input name="pass" class="form-control" placeholder="******" type="password" style="font-size: 1.5rem;">
                </div> <!-- form-group// --> 
                <div class="form-group p-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-dark" style="font-size: 1.5rem;">Iniciar sesión</button>
                </div> <!-- form-group// -->    
            </form>
            </div> <!-- card-body.// -->
            <div class="card-footer text-center">¿No tienes una cuenta? <a href="">Registrate</a></div>
        </div>
        <div class="d-flex justify-content-center"><p class="mt-4 mb-3 text-muted">© 2022 ComSafe</p></div>
        </div>
        
    </body>

<!-- Librerias Bootstrap -->
<script src="../lib/bootstrap/js/bootstrap.min.js" ></script>

</html>