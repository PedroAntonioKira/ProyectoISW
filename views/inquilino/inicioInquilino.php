<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComSafe</title>
    
    <!-- Librerias Bootstrap -->
    <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/styleUser.css">
    <link rel="stylesheet" href="../../css/normalize.css">

    <!--CDNs externos-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">


</head>
<body>
    
    <header class="">
        <?php 
            include_once "../plantilla/header2.php";
        ?>
    </header>
    
    <main>
        <div class="container col-xxl-8 px-4 py-2">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-3">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="../../img/key.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"  height="300" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column mb-3">
                        <div class="p-2">
                            <h1 class="display-1 fw-bold lh-1 text-center">¡Bienvenido a la comunidad!</h1>
                        </div>
                        <div class="p-2">
                            <p class="fs-2"> Consulta, gestiona, registra y mucho más de manera intuitiva y cómoda...</p>
                        </div>
                        <div class="ms-auto p-2">
                            <ul class="nav text-end">
                                <li class="nav-item">
                                    <a href="#comenzar" class="nav-link link-dark px-2 fw-bold">COMENZAR 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="b-example-divider"></div>
    
    <div class="py-5">
        <div class="container morado rounded" id="comenzar">
            <div class="container px-4 py-5" id="featured-3">
                <h2 class="pb-2 border-bottom">Panel de control</h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-1 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-heart" viewBox="0 0 16 16">
                            <path d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z"/>
                            </svg>
                        </div>
                        <h2>Mis Familiares</h2>
                        <p>Consulte la información registrada sobre sus familiares</p>
                        <a href="familiares.php" class="icon-link d-inline-flex align-items-center">
                        Ir
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                        </a>
                    </div>
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-1 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                            <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                        </svg>
                        </div>
                        <h2>Mis Vehículos</h2>
                        <p>Consulte la información registrada sobre su vehículos</p>
                        <a href="vehiculoInq.php" class="icon-link d-inline-flex align-items-center">
                        Ir
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                        </a>
                    </div>
                    <div class="feature col">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-1 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
                            </svg>
                        </div>
                        <h2>Mis Visitas</h2>
                        <p>Consulte todas las visitas a su inmueble registradas</p>
                        <a href="visitasInq.php" class="icon-link d-inline-flex align-items-center">
                        Ir
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="container">
        <div class="row align-items-end">
            <div class="col">
                <section class="area_section mt-5">
                    <div class="container p-5">
                        <h2 class="text-white">Áreas Comunes</h2>
                    </div>
                </section>
                <div class="parent px-5 ">
                    <div class="div2"> 
                        <?php
                            $consulta = "SELECT * FROM area_comun LIMIT 3; ";
                            include("../../php/conexionbd.php");

                            if($conn){
                                $resultado = mysqli_query($conn, $consulta);
                            }
                            ?>
                            <ul class="list-group list-group-flush pb-5">
                            <?php

                            while($fila = $resultado->fetch_object()){
                                $ided = $fila -> ID;
                                $nombre = ucwords(strtolower($fila->NOMBRE));
                                $objetivo =$fila -> OBJETIVO;
                                $des = ucfirst(mb_strtolower($fila -> DESCRIPCION));
                                echo "
                                    <li class='list-group-item'>
                                        <h5>$nombre</h5>
                                        <p>$des</p>
                                        <a href='../inquilino/reservarAC.php' class='alert-link text-danger'>Reservar</a>
                                    </li>
                                ";
                            }
                        ?>
                            <a href="../inquilino/areaComunInq.php" class="alert-link text-end">Ver más...</a>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-5">
                    <div class="flex-row align-items-end p-5">
                        <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
                            <div class="p-2 ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                                    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                                </svg>
                            </div>
                            <div class="p-2">En caso de alguna queja o desconformidad con alguna situación con el inmueble, vecinos, personal, etc. Consulte y registre reportes haciendo <a href="../inquilino/reportesInq.php">click aqui</a>.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
    <!-- Copyright -->
        <div class="text-center p-3 fw-bold">
            © 2022 ComSafe. 
        </div>
    <!-- Copyright -->
    </footer>
</body>

<!-- Librerias Bootstrap -->
<script src="../../lib/bootstrap/js/bootstrap.min.js" ></script>

</html>