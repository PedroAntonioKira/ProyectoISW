<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Automoviles</title>
    
    <!-- Librerias Bootstrap -->
    <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/styleCentrar.css">

    <!--CDNs externos-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
</head>
<body>
    
    <div class="centrar">
    <div class=" m-4 mx-auto border border-primary rounded p-3 " >
        <div class="card border-light">
            <article class="card-body">
                <header class="mb-2 pb-5">
                    <div class="d-flex justify-content-center p-1">
                        <a href=""><img src="../../img/icono.svg" width="140" height="100" alt=""></a>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <h4 class="card-title mb-4">Registro Nuevo Automovil</h4>
                    </div>
                </header>
                
                <form action="../../php/registroVehiculos.php" name="Inicioses2" method="post">
                    <!--Nombre completo-->
                    <div class="row g-3 px-5 ">
                        <div class="col-md-4 form-group ">
                            <label>Placas*</label>
                            <input required type="text" class="form-control" name="Placas" id="Pl" autofocus style="font-size: 1.5rem;">
                            <span class="errorPl" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                        <div class="col-md-4 form-group">
                            <label>Modelo*</label>
                            <input required type="text" class="form-control" name="Modelo" id="M" style="font-size: 1.5rem;">
                            <span class="errorM" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                        <div class="col-md-4 form-group">
                            <label>Marca*</label>
                            <input required type="text" class="form-control" name="Marca" id="MC" style="font-size: 1.5rem;">
                            <span class="errorMC" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                    </div>
                    <!-- Correo -->
                    <div class="form-group form-row px-5 py-2">
                        <label class="col-md-3 col-form-label" >Color*</label>
                        <div class="col">
                            <input required type="text" class="form-control mail" placeholder="Ej. Rojo, Blanco .... " id="C" name="Color" style="font-size: 1.5rem;">
                            <span class="errorC" aria-live="polite"></span>
                        </div>
                    </div>
                    
                    <div class="form-group d-flex justify-content-between p-md-5 pt-5">
                        <a type="submit" href="../inquilino/vehiculoInq.php" class="btn btn-outline-primary" name="btnC" id="btnC" value="Cancelar" style="font-size: 1.5rem;">Cancelar</a>
                        <input type="submit" class="btn btn-outline-dark" name="btnR" id="btn" value="Registrar" style="font-size: 1.5rem;">
                    </div>
                    <!-- form-group// -->
                </form>
                <script src="../../js/validaciones/validation.js"></script>
            </article>
            <!-- card-body end .// -->
            <div class="card-footer text-center text-muted">© 2022 ComSafe. </div>
        </div>
    </div>
    </div>
    
</body>

<!-- Librerias Bootstrap -->
<script src="../../lib/bootstrap/js/bootstrap.min.js" ></script>

</html>