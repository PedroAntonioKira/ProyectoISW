<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Reportes</title>
    
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
    <div class="m-4 mx-auto border border-primary rounded p-3 " >
        <div class="card border-light">
            <article class="card-body">
                <header class="mb-2 pb-5">
                    <div class="d-flex justify-content-center p-1">
                        <a href=""><img src="../../img/icono.svg" width="140" height="100" alt=""></a>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <h4 class="card-title mb-4">Registro Reporte</h4>
                    </div>
                </header>
                
                <form action="../../php/registroReportes.php" name="Inicioses2" method="post">
                    <div class="row g-3 px-5 py-5">
                        <p class="fw-bold fs-3 m-0">Información del reportador</p>
                        <div class="col form-group ">
                            <label>Número de contrato*</label>
                            <input required type="text" class="form-control" name="NumCont" id="NC" style="font-size: 1.5rem;" value="<?php echo $_SESSION['NCONTRATO']?>">
                            <span class="errorNC" aria-live="polite"></span>
                        </div>
                        <div class="col form-group ">
                            <label>CURP*</label>
                            <input required type="text" class="form-control" name="Curp" id="C" style="font-size: 1.5rem;" value="<?php echo $_SESSION['CURP']?>">
                            <span class="errorC" aria-live="polite"></span>
                        </div>
                            <!-- form-group end.// -->
                    </div>
                    <!--Nombre completo-->
                    <div class="row g-3 px-5 ">
                        <p class="fw-bold fs-3 m-0">Información del reporte</p>
                        <div class="col form-group ">
                            <label>Tipo*</label>
                            <select class="form-select form-control" style="font-size: 1.5rem;" name="TipoR" id="TR" required>
                                <option selected disabled>Seleccionar...</option>
                                <option value="1">Seguridad</option>
                                <option value="2">Mantenimiento</option>
                                <option value="3">Queja</option>
                            </select>
                        </div>
                        <!-- form-group end.// -->
                    </div>
                    <div class="row g-3 px-5 py-2">
                        <div class="col form-group">
                            <label for="D">Descripción*
                            </label>
                            <textarea required type="text" class="form-control" name="Descripcion" id="D" autofocus style="font-size: 1.3rem; height: 100px"></textarea>
                            <span class="errorD" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                    </div>
                    
                    <div class="form-group d-flex justify-content-between p-md-5 pt-5">
                        <a type="submit" href="../inquilino/reportesInq.php" class="btn btn-outline-primary" name="btnC" id="btnC" value="Cancelar" style="font-size: 1.5rem;">Cancelar</a>
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
    </div>
    
</body>

<!-- Librerias Bootstrap -->
<script src="../../lib/bootstrap/js/bootstrap.min.js" ></script>

</html>