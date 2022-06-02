<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    
    <!-- Librerias Bootstrap -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleAdmin.css">

    <!--CDNs externos-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

</head>
<body>
    
    <header class="">
        <?php 
        include_once "plantilla/header.php";
        ?>
    </header>
    
    <div class="div-auxiliar"></div>
    <div class="position-relative">
        <div class="position-absolute top-0 start-50 translate-middle ">
            <h1 class="fw-bolder">Administrador</h1>
        </div>
        
        <div class="fondo-azul">
            <div class="contenedor">
                <div class="row px-5">
                    <div class="col p-5">
                        <div class="card border-light">
                            <div class="card-body">
                                <div class="d-md-flex flex-md-row mb-3 align-items-center ">
                                    <div class="p-2 img-card">
                                        <img src="../img/com.jpg" alt="comunidad">
                                    </div>
                                    <div class="p-2">
                                        <h5 class="card-title">Inquilinos</h5>
                                    </div>
                                </div>
                                <div class="card-text fondo-azul-fuerte p-3 fs-4">
                                        <?php
                                            $consulta = "SELECT count(*) FROM inquilino;; ";
                                            include("../php/conexionbd.php");

                                            if($conn){
                                                $resultado = mysqli_query($conn, $consulta);
                                            }
                                            $total = $resultado->fetch_array()[0] ?? '';
                                            echo "<p class='fw-bold text-center border-bottom border-primary'>Total de inquilinos: $total</p>";
                                        ?>
                                    
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                        </svg>
                                        <a class="nav-link ps-4" href="registros/registroInquilino.php">Registrar Nuevo Inquilino</a>
                                    </div>
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                        <a class="nav-link ps-4" href="consultas/Adinquilinos.php">Consultar Inquilinos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col p-5">
                        <div class="card border-light">
                            <div class="card-body">
                                <div class="d-md-flex flex-md-row mb-3 align-items-center ">
                                    <div class="p-2 img-card">
                                        <img src="../img/inmuebles.png" alt="inmueble">
                                    </div>
                                    <div class="p-2">
                                        <h5 class="card-title">Inmuebles</h5>
                                    </div>
                                </div>
                                <div class="card-text fondo-azul-fuerte p-3 fs-4">
                                        <?php
                                            $consulta = "SELECT count(*) FROM inmueble; ";

                                            if($conn){
                                                $resultado = mysqli_query($conn, $consulta);
                                            }
                                            $total = $resultado->fetch_array()[0] ?? '';
                                            echo "<p class='fw-bold text-center border-bottom border-primary'>Total de inmuebles: $total</p>";
                                        ?>
                                    
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                        </svg>
                                        <a class="nav-link ps-4" href="registros/registroInmueble.php">Registrar Nuevo Inmueble</a>
                                    </div>
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                        <a class="nav-link ps-4" href="consultas/Inmuebles.php">Consultar Inmuebles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-5">
                    <div class="col p-5 ">
                        <div class="card border-light h-100">
                            <div class="card-body">
                                <div class="d-md-flex flex-md-row mb-3 align-items-center ">
                                    <div class="p-2 img-card">
                                        <img src="../img/edificios.jpg" alt="edificio">
                                    </div>
                                    <div class="p-2">
                                        <h5 class="card-title">Edificios</h5>
                                    </div>
                                </div>
                                <div class="card-text fondo-azul-fuerte p-3 fs-4">
                                    <?php
                                        $consulta = "SELECT count(*) FROM seccion; ";

                                        if($conn){
                                            $resultado = mysqli_query($conn, $consulta);
                                        }
                                        $total = $resultado->fetch_array()[0] ?? '';
                                        echo "<p class='fw-bold text-center border-bottom border-primary'>Total de edificios: $total</p>";
                                    ?>
                                
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                            <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                                        </svg>
                                        <a class="nav-link ps-4" href="registros/registroEdificio.php">Registrar Nuevo Edificio</a>
                                    </div>
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                        <a class="nav-link ps-4" href="consultas/edificios.php">Consultar Edificios</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col p-5">
                        <div class="card border-light">
                            <div class="card-body">
                                <div class="d-md-flex flex-md-row mb-3 align-items-center ">
                                    <div class="p-2 img-card">
                                        <img src="../img/areac.jpg" alt="area comun">
                                    </div>
                                    <div class="p-2">
                                        <h5 class="card-title">Áreas comunes</h5>
                                    </div>
                                </div>
                                <div class="card-text fondo-azul-fuerte p-3 fs-4">
                                    <?php
                                        $consulta = "SELECT count(*) FROM area_comun; ";

                                        if($conn){
                                            $resultado = mysqli_query($conn, $consulta);
                                        }
                                        $total = $resultado->fetch_array()[0] ?? '';
                                        echo "<p class='fw-bold text-center border-bottom border-primary'>Total de áreas comúnes: $total</p>";
                                    ?>
                                
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tree-fill" viewBox="0 0 16 16">
                                            <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5z"/>
                                        </svg>
                                        <a class="nav-link ps-4" href="registros/registroAC.php">Registrar Nueva Área Común</a>
                                    </div>
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                        <a class="nav-link ps-4" href="consultas/areaComunC.php">Consultar Áreas Comúnes</a>
                                    </div>
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                        </svg>
                                        <a class="nav-link ps-4" href="consultas/reservas.php">Consultar Reservaciones</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-5">
                <div class="col p-5">
                    <div class="card border-light">
                        <div class="card-body">
                            <div class="d-md-flex flex-md-row mb-3 align-items-center ">
                                <div class="p-2 img-card">
                                    <img src="../img/visitas.png" alt="visitas">
                                </div>
                                <div class="p-2">
                                    <h5 class="card-title">Visitas</h5>
                                </div>
                            </div>
                            <div class="card-text fondo-azul-fuerte p-3 fs-4">
                                    <?php
                                        date_default_timezone_set('America/Monterrey');
                                        $fecha = date("Y-m-d");
                                        $consulta = "SELECT count(*) FROM visitante WHERE FECHA = '$fecha';";

                                        if($conn){
                                            $resultado = mysqli_query($conn, $consulta);
                                        }
                                        $total = $resultado->fetch_array()[0] ?? '';
                                        echo "<p class='fw-bold text-center border-bottom border-primary'>Visitas de hoy: $total</p>";
                                    ?>
                                
                                    <div class="d-none alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                            <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                                        </svg>
                                        <a class="nav-link ps-4" href="registros/registroVisitas.php">Registrar Nuevo Edificio</a>
                                    </div>
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
                                        </svg>
                                        <a class="nav-link ps-4" href="consultas/visitantes.php">Consultar visitas </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col p-5">
                        <div class="card border-light">
                            <div class="card-body">
                                <div class="d-md-flex flex-md-row mb-3 align-items-center ">
                                    <div class="p-2 img-card">
                                        <img src="../img/consulta.png" alt="consulta">
                                    </div>
                                    <div class="p-2">
                                        <h5 class="card-title">Reportes</h5>
                                    </div>
                                </div>
                                <div class="card-text fondo-azul-fuerte p-3 fs-4">
                                    <?php
                                        $consulta = "SELECT count(*) FROM reportes; ";

                                        if($conn){
                                            $resultado = mysqli_query($conn, $consulta);
                                        }
                                        $total = $resultado->fetch_array()[0] ?? '';
                                        echo "<p class='fw-bold text-center border-bottom border-primary'>Total de reportes: $total</p>";
                                    ?>
                                
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-clipboard-x-fill" viewBox="0 0 16 16">
                                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm4 7.793 1.146-1.147a.5.5 0 1 1 .708.708L8.707 10l1.147 1.146a.5.5 0 0 1-.708.708L8 10.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 10 6.146 8.854a.5.5 0 1 1 .708-.708L8 9.293Z"/>
                                        </svg>
                                        <a class="nav-link ps-4" href="consultas/reportes.php">Consultar Reportes</a>
                                    </div>
                        
                                </div>
                            </div>
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
<script src="../lib/bootstrap/js/bootstrap.min.js" ></script>

</html>