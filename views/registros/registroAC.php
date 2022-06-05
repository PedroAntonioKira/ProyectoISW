<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Área Común</title>
    
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
                        <h4 class="card-title mb-4">Registro Área Común</h4>
                    </div>
                </header>
                
                <form action="../php/registroAco.php" name="Inicioses2" method="post">
                    
                    <!-- Info general -->
                    <div class="row g-3 px-5 pt-3">
                        <p class="fw-bold fs-3 m-0">Información general</p>
                        <div class="col form-group mt-0">
                            <label>Nombre*</label>
                            <input required type="text" class="form-control" name="NombreAC" id="NAC" autofocus style="font-size: 1.3rem;">
                            <span class="errorNAC" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                        <div class="col-md-4 form-group mt-0">
                            <label>Cantidad de personas*</label>
                            <input required type="text" class="form-control" name="Personas" id="CP" style="font-size: 1.3rem;" >
                            <span class="errorCP" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                    </div>
                    <div class="row g-3 px-5 pt-4">
                        <!-- form-group end.// -->
                        <div class="col form-group mt-0">
                            <label>Objetivo*</label>
                            <input required type="text" class="form-control" name="Objetivo" id="O" style="font-size: 1.3rem;" >
                            <span class="errorO" aria-live="polite"></span>
                        </div>
                        <!-- form-group end.// -->
                    </div>


                    <!--Info interna-->
                    <div class="row g-3 px-5 pt-4">
                        <div class="col form-group mt-0">
                            <label for="D">Descripción</label>
                            <textarea required type="text" class="form-control" name="Descripcion" id="D" autofocus style="font-size: 1.3rem; height: 100px"></textarea>
                            <span class="errorD" aria-live="polite"></span>
                        </div>
                    </div>

                    <div class="form-group d-flex justify-content-between p-5">
                        <a type="submit" href="../consultas/areaComunC.php" class="btn btn-outline-primary" name="btnC" id="btnC" value="Cancelar" style="font-size: 1.5rem;">Cancelar</a>
                        <input type="submit" class="btn btn-outline-primary" name="btnR" id="btn" value="Registrar" style="font-size: 1.5rem;">
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