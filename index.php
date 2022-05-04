<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Catt</title>

    <!-- Librerias Fuente GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">
    <!-- Librerias Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="css/Cuerpo.css">
    <link rel="stylesheet" href="css/Cabecera.css">
    <link rel="stylesheet" href="css/Footer.css">
    <link rel="stylesheet" href="css/tarjeta.css">

</head>
<body>
    <?php
        //echo "se puede meter texto aqui jaja"
    ?>  

    <header>
        

        <div class="contenedorLogo">
            

            <div class="contendorLogoIPN">
            <img src="img/LogoIPN02.png" alt="LogoCATT">
            </div>

            <div class="contendorLogoCATT">
                <!-- <img src="img/LogoCOMSAFE02.png" alt="LogoCATT"> -->
                <h2>ComSafe</h2>
            </div>

            <div class="contendorLogoESCOM">
            <img src="img/LogoESCOM02.png" alt="LogoCATT">
            </div>
        </div>
    </header>


    <?php 
        include_once "MenuPrincipal.php";
    ?>


    <main>
        <section class="CarrucelPrincipal02">

            <div id="carouselExampleCaptions" class="CarrucelPrincipal carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/CarruselPrincipal05.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/CarruselPrincipal06.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/CarruselPrincipal07.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <a href="#" class="btn btn-primary"> Google</a>

        <section class="contenedorTarjetas">
            <div class="card mb-3 tarjeta" style="max-width: 400px;">
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

            <div class="card mb-3 tarjeta" style="max-width: 400px;">
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

            <div class="card mb-3 tarjeta" style="max-width: 400px;">
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

            <div class="card mb-3 tarjeta" style="max-width: 400px;">
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

            <div class="card mb-3 tarjeta" style="max-width: 400px;">
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

            <div class="card mb-3 tarjeta" style="max-width: 400px;">
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
            <h3>@ Todos los derechos reservados para COMSAFE XD</h3>
        </footer>
</body>

<!-- Librerias Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Funciones Propias JS -->
<script src="js/MenuPegajoso.js">  </script>
</html>