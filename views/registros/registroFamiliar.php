<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Inquilino</title>
    
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
                        <h4 class="card-title mb-4">Registro Nuevo Familiar</h4>
                    </div>
                </header>
                
                <form action="../../php/regFamiliar.php" name="Inicioses2" method="post">
                    <!--Nombre completo-->
                    <div class="row g-3 px-5 ">
                        <div class="col-md-4 form-group ">
                            <label>Nombre*</label>
                            <input required type="text" class="form-control" name="Nombre" id="Nombre" autofocus style="font-size: 1.5rem;">
                            <span class="errorN" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                        <div class="col-md-4 form-group">
                            <label>Apellido Paterno*</label>
                            <input required type="text" class="form-control" name="Apellido_Paterno" id="AP" style="font-size: 1.5rem;">
                            <span class="errorAP" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                        <div class="col-md-4 form-group">
                            <label>Apellido Materno*</label>
                            <input required type="text" class="form-control" name="Apellido_Materno" id="AM" style="font-size: 1.5rem;">
                            <span class="errorAM" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                    </div>
                    <!-- Correo -->
                    <div class="form-group form-row px-5 py-2">
                        <label class="col-md-3 col-form-label" >Correo electrónico*</label>
                        <div class="col">
                            <input required type="text" class="form-control mail" placeholder="Ej. john@gmail.com" id="Correo_Electronico" name="Correo_Electronico" style="font-size: 1.5rem;">
                            <span class="errorE" aria-live="polite"></span>
                        </div>
                    </div>
                    
                    <!-- Contraseña -->
                    <div class="form-group form-row px-5 py-2">
                        <label class="col-md-3 col-form-label" >Contraseña*</label>
                        <div class="col">
                            <input required type="password" class="form-control mail" placeholder="contraseña" id="pass" name="Contrasenia" style="font-size: 1.5rem;">
                            <span class="errorE" aria-live="polite"></span>
                        </div>
                    </div>

                    <!-- Más info -->
                    <div class="row g-3 px-5 py-2">
                        <div class="col form-group ">
                            <label>CURP*</label>
                            <input required type="text" class="form-control" name="Curp" id="CP" style="font-size: 1.5rem;">
                            <span class="errorC" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                    </div>

                    <div class="row g-3 px-5 py-2">
                        <!-- form-group end.// -->
                        <div class="col-md-3 form-group">
                            <label>Sexo*</label>
                            <select class="form-select form-control" style="font-size: 1.5rem;" name="Sexo" id="TI" required>
                                <option selected disabled>Seleccionar...</option>
                                <option value="HOMBRE">Hombre</option>
                                <option value="MUJER">Mujer</option>
                            </select>
                            
                        </div>
                        <!-- form-group end.// -->
                    </div>

                    <div class="form-group d-flex justify-content-between p-md-5 pt-5">
                        <a type="submit" href="../inquilino/familiares.php" class="btn btn-outline-primary" name="btnC" id="btnC" value="Cancelar" style="font-size: 1.5rem;">Cancelar</a>
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