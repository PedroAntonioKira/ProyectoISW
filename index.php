<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto ComSafe</title>

    <!-- Librerias Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="css/Cuerpo.css">
    <link rel="stylesheet" href="css/Cabecera.css">
    <link rel="stylesheet" href="css/CarruselPrincipal.css">
    <link rel="stylesheet" href="css/Tarjeta.css">
    <link rel="stylesheet" href="css/Footer.css">
    

</head>
<body>

    <header>
        <div class="contenedorLogo">
            <div class="contendorLogoComSafe">
                <img src="img/LogoCOMSAFE03.png" alt="contendorLogoComSafe"> 
            </div>

            <div class="contenedorBotonesMenuResponsive">
                <input type="checkbox" id="check" class="checkResponsive">
                <label for="check" class="checkBoton">
                
                    <span class="botonMenuResponsive01" id="botonMenuResponsive01"> 
                        <img src="icon/package.png" alt="">
                    </span>
                    <span class="botonMenuResponsive02" id="botonMenuResponsive02"> 
                        <img src="icon/clearance.png" alt="">
                    </span>
                
                </label>
            </div>
            
        </div>
    </header>
    <div class="AjusteMenu" id="AjusteMenu">

    </div>

    <?php 
        include_once "php/MenuPrincipal.php";
    ?>

    

    <main class="cuerpoPrincipalPagina" id="cuerpoPrincipalPagina">
        <?php 
            include_once "php/Carrusel.php";
        ?>

        
        <a href="#" class="btn btn-primary"> Google</a>
        
        <section class="contenedorTarjetas">
            <div class="card mb-3 tarjeta" style="max-width: 400px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Tarjeta01.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Titulo de la Tarjeta</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 tarjeta" style="max-width: 400px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Tarjeta01.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Titulo de la Tarjeta</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 tarjeta" style="max-width: 400px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Tarjeta01.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Titulo de la Tarjeta</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 tarjeta" style="max-width: 400px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Tarjeta01.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Titulo de la Tarjeta</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 tarjeta" style="max-width: 400px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Tarjeta01.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Titulo de la Tarjeta</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 tarjeta" style="max-width: 400px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Tarjeta01.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Titulo de la Tarjeta</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 tarjeta02" style="max-width: 400px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/CarruselPrincipal02.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Titulo de la Tarjeta</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

    <footer>
        <h3>@ Todos los derechos reservados para COMSAFE</h3>
    </footer>
</body>

<!-- Librerias Bootstrap -->
<script src="lib/bootstrap/js/bootstrap.min.js" ></script>

<!-- Funciones Propias JS -->
<script src="js/MenuPegajoso.js">  </script>
<script src="js/validacionCheckBox.js">  </script>
</html>