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

    <!--CDNs externos-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

</head>
<body >
    <header class="">
        <nav class="container " >
            <div class="py-1 bg-light border-bottom row align-items-center ">
                <div class="col">
                    <img src="./img/LogoVertical.svg" height="60"></img>
                </div>
                <div class="d-flex flex-wrap justify-content-end col">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link link-dark px-2">Iniciar Sesión <i class="fas fa-sign-in-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>
    <div class="AjusteMenu" id="AjusteMenu">

    </div>

    <?php 
       include_once "php/MenuPrincipal.php";
    ?>

    <main class="cuerpoPrincipalPagina " id="cuerpoPrincipalPagina" s>
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
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 ComSafe. 
        </div>
        <!-- Copyright -->
    </footer>
    
</body>

<!-- Librerias Bootstrap -->
<script src="lib/bootstrap/js/bootstrap.min.js" ></script>

<!-- Funciones Propias JS -->
<script src="js/MenuPegajoso.js">  </script>
<script src="js/validacionCheckBox.js">  </script>
</html>