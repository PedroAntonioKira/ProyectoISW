<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Visita</title>
    
    <!-- Librerias Bootstrap -->
    <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/style.css">

    <!--CDNs externos-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
</head>
<body>
    
    <div class="ancho-ini-ri m-4 mx-auto border border-primary rounded p-3 " >
        <div class="card border-light">
            <article class="card-body">
                <header class="mb-2 pb-5">
                    <div class="d-flex justify-content-center p-1">
                        <a href=""><img src="../../img/icono.svg" width="140" height="100" alt=""></a>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <h4 class="card-title mb-4">Registro Visita</h4>
                    </div>
                </header>
                
                <form action="" name="Inicioses2" method="post">
                    <!--Nombre completo-->
                    <div class="row g-3 px-5 ">
                        <p class="fw-bold fs-3 m-0">Información del visitante</p>
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
                    <!-- CURP -->
                    <div class="form-group form-row px-5 py-2">
                        <label class="col-md-3 col-form-label" >CURP*</label>
                        <div class="col">
                            <input required type="text" class="form-control" id="CP" name="Curp" style="font-size: 1.5rem;">
                            <span class="errorC" aria-live="polite"></span>
                        </div>
                    </div>
                    
                    <!-- Más info -->
                    <div class="row g-3 px-5 py-2 align-middle">
                        <div class="col form-group mb-0">
                            <label>Método de llegada*</label>
                            <input required type="text" class="form-control" name="MLllegada" id="ML" style="font-size: 1.5rem;">
                            <span class="errorML" aria-live="polite"></span>
                        </div>
                        <div class="col-md-4 form-group ">
                            <label>Placas</label>
                            <input required type="text" class="form-control" name="Placa" id="P" style="font-size: 1.5rem;">
                            <span class="errorP" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                    </div>
                    
                    <div class="row g-3 px-5 py-5">
                    <p class="fw-bold fs-3 m-0">Información del responsable</p>
                        <div class="col form-group ">
                            <label>Número de contrato*</label>
                            <input required type="text" class="form-control" name="NumCont" id="NC" style="font-size: 1.5rem;">
                            <span class="errorNC" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                    </div>

                    <div class="form-group d-flex justify-content-end p-5">
                        <input type="submit" class="btn btn-outline-dark" name="btnR" id="btn" value="Registrar" style="font-size: 1.5rem;">
                    </div>
                    <!-- form-group// -->
                </form>
                <script src=""></script>
            </article>
            <!-- card-body end .// -->
            <div class="card-footer text-center text-muted">© 2022 ComSafe. </div>
        </div>
    </div>
    
</body>

<!-- Librerias Bootstrap -->
<script src="../../lib/bootstrap/js/bootstrap.min.js" ></script>

</html>