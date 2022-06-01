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
                                <?php session_name("usuariops");
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
            <h1 class="fw-bolder">Reportes y Consultas</h1>
        </div>
        
        <div class="fondo-azul">
            
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