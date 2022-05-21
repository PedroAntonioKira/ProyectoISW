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
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/CarruselPrincipal.css">

    <!--CDNs externos-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

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
                            <a href="ISADMIN.php" class="nav-link link-dark px-2">Iniciar Sesión <i class="fas fa-sign-in-alt"></i></a>
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

        <section class="contenedor seccion p-5">
            <h2 class="fw-light text-center">Más Sobre Nosotros</h2>

            <div class="d-md-flex justify-content-md-between p-4">
                <div class="icono">
                    <img src="img/icono1.svg" alt="Icono Seguridad">
                    <h3 >Seguridad</h3>
                    <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
                </div>

                <div class="icono">
                    <img src="img/icono2.svg" alt="Icono Mejor Precio">
                    <h3>El Mejor Precio</h3>
                    <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
                </div>

                <div class="icono">
                    <img src="img/icono3.svg" alt="Icono a Tiempo">
                    <h3>A Tiempo</h3>
                    <p>Quasi quibusdam, quos deserunt, recusandae iusto dolorem voluptatibus quaerat veritatis consectetur culpa sit dignissimos maiores iure id, magnam non voluptatum molestiae doloremque.</p>
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