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
        <nav class="container pb-2" >
            <div class="py-1 bg-light border-bottom row align-items-center ">
                <div class="col">
                    <img src="../img/LogoVertical.svg" height="50"></img>
                </div>
                <div class="d-flex flex-wrap justify-content-end col">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="ISADMIN.php" class="nav-link link-dark px-2">Bienvenido, 
                                <?php session_name("usuario");
                                      session_start();
                                      echo ucfirst($_SESSION["Nombre"])?> 
                            <i class="fas fa-sign-in-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        
        <?php 
        include_once "../php/MenuAdmin.php";
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
                                <p class="card-text fondo-azul-fuerte p-3 fs-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita neque vero ducimus facilis accusantium exercitationem ea iusto consectetur doloremque. Illum!</p>
                                <a href="../views/consultas/Adinquilinos.php" class="btn btn-outline-primar btn-lg active" role="button" aria-pressed="true"><h4 class="fw-bold px-5 fs-3">Ir</h4></a>
                                
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
                                <p class="card-text fondo-azul-fuerte p-3 fs-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita neque vero ducimus facilis accusantium exercitationem ea iusto consectetur doloremque. Illum!</p>
                                <a href="consultas/Inmuebles.php" class="btn btn-outline-primar btn-lg active" role="button" aria-pressed="true"><h4 class="fw-bold px-5 fs-3">Ir</h4></a>
                                
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
                                            <img src="../img/edificios.jpg" alt="edificio">
                                        </div>
                                        <div class="p-2">
                                            <h5 class="card-title">Edificios</h5>
                                        </div>
                                    </div>
                                    <p class="card-text fondo-azul-fuerte p-3 fs-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita neque vero ducimus facilis accusantium exercitationem ea iusto consectetur doloremque. Illum!</p>
                                    <a href="#" class="btn btn-outline-primar btn-lg active" role="button" aria-pressed="true"><h4 class="fw-bold px-5 fs-3">Ir</h4></a>
                                    
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
                                    <p class="card-text fondo-azul-fuerte p-3 fs-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita neque vero ducimus facilis accusantium exercitationem ea iusto consectetur doloremque. Illum!</p>
                                    <a href="registros/registroAC.php" class="btn btn btn-outline-prima btn-lg active" role="button" aria-pressed="true"><h4 class="fw-bold px-5 fs-3">Ir</h4></a>
                                    
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
                            <p class="card-text fondo-azul-fuerte p-3 fs-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita neque vero ducimus facilis accusantium exercitationem ea iusto consectetur doloremque. Illum!</p>
                            <a href="Adinquilinos.php" class="btn btn-outline-primar btn-lg active" role="button" aria-pressed="true"><h4 class="fw-bold px-5 fs-3">Ir</h4></a>
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
                                        <h5 class="card-title">Consultass</h5>
                                    </div>
                                </div>
                                <p class="card-text fondo-azul-fuerte p-3 fs-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita neque vero ducimus facilis accusantium exercitationem ea iusto consectetur doloremque. Illum!</p>
                                <a href="#" class="btn btn btn-outline-prima btn-lg active" role="button" aria-pressed="true"><h4 class="fw-bold px-5 fs-3">Ir</h4></a>
                                
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