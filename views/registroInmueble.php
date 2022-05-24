<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Inmueble</title>
    
    <!-- Librerias Bootstrap -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">

    <!--CDNs externos-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    
</head>
<body>
    
    <div class="ancho-ini-ri m-4 mx-auto border border-primary rounded p-3 " >
        <div class="card border-light">
            <article class="card-body">
                <header class="mb-2 pb-5">
                    <div class="d-flex justify-content-center p-1">
                        <a href=""><img src="../img/icono.svg" width="140" height="100" alt=""></a>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <h4 class="card-title mb-4">Registro Inmueble</h4>
                    </div>
                </header>
                
                <form action="../php/regInquilinos.php" name="Inicioses2" method="post">
                    
                    <!-- Info general -->
                    <div class="row g-3 px-5 ">
                        <p class="fw-bold fs-3 m-0">Información general</p>
                        <div class="col form-group mt-0">
                            <label>Seccion*</label>
                            <input required type="text" class="form-control" name="Seccion" id="SC" autofocus style="font-size: 1.3rem;">
                            <span class="errorS" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                        <div class="col-md-4 form-group mt-0">
                            <label>Precio*</label>
                            <input required type="text" class="form-control" name="Precio" id="P" style="font-size: 1.3rem;" placeholder="$">
                            <span class="errorP" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                        <!-- form-group end.// -->
                    </div>

                    <!--Info interna-->
                    <div class="row g-3 px-5 pt-5">
                        <p class="fw-bold fs-3 m-0">Información interna del inmueble</p>
                        <div class="col-md-4 form-group mt-0">
                            <label>No. Pisos*</label>
                            <input required type="text" class="form-control" name="NumPisos" id="NP" autofocus style="font-size: 1.3rem;">
                            <span class="errorN" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                        <div class="col-md-4 form-group mt-0">
                            <label>No. Baños*</label>
                            <input required type="text" class="form-control" name="NumBaños" id="NB" style="font-size: 1.3rem;">
                            <span class="errorAP" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                        <div class="col-md-4 form-group mt-0">
                            <label>No. Cuartos*</label>
                            <input required type="text" class="form-control" name="NumCuartos" id="NC" style="font-size: 1.3rem;">
                            <span class="errorAM" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                    </div>

                     <!--Dimensiones-->
                     <div class="row g-3 px-5 pt-5">
                        <p class="fw-bold fs-3 m-0">Dimensiones</p>
                        <div class="col-md-4 form-group mt-0">
                            <label>Ancho*</label>
                            <input required type="text" class="form-control" name="NumPisos" id="NP" autofocus style="font-size: 1.3rem;">
                            <span class="errorN" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                        <div class="col-md-4 form-group mt-0">
                            <label>Alto*</label>
                            <input required type="text" class="form-control" name="NumBaños" id="NB" style="font-size: 1.3rem;">
                            <span class="errorAP" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                        <div class="col-md-4 form-group mt-0">
                            <label>Profundo*</label>
                            <input required type="text" class="form-control" name="NumCuartos" id="NC" style="font-size: 1.3rem;">
                            <span class="errorAM" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                    </div>

                    <div class="form-group d-flex justify-content-end p-5">
                        <input type="submit" class="btn btn-outline-dark" name="btnR" id="btn" value="Registrarse" style="font-size: 1.5rem;">
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
<script src="../lib/bootstrap/js/bootstrap.min.js" ></script>

</html>