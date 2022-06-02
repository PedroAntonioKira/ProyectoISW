<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad</title>
    
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
            include_once "plantilla/header2.php";
        ?>
    </header>
    
    <div class="div-auxiliar"></div>
    <div class="position-relative">
        <div class="position-absolute top-0 start-50 translate-middle ">
            <h1 class="fw-bolder">Fraccionamiento</h1>
        </div>
        
        <div class="fondo-azul p-5">
            <div class="contenedor fondo-blanco m-auto">
                <div class="parent px-5 border ">
                <h3 class="px-5 pt-5">Visitas para hoy</h3>
                    <div class="div2 px-5"> 
                        <?php
                            date_default_timezone_set('America/Monterrey');
                            $fecha = date("Y-m-d");
                            $consulta = "SELECT ID_VISITA, DATE_FORMAT(FECHA, '%d/%m/%y') AS FECHA, PLACAS, NOMBRES,V.AP_MATERNO AS AP_MATERNO_V , V.AP_PATERNO AS AP_PATERNO_V, NOMBRE, I.AP_MATERNO, I.AP_PATERNO, MDELLEGADA, I.CURP from visitante V, inquilino I WHERE V.NUMCONTRATO = I.NUMCONTRATO AND V.CURP = I.CURP AND FECHA = '$fecha';";
                            include("./../php/conexionbd.php");

                            if($conn){
                                $resultado = mysqli_query($conn, $consulta);
                            }
                            ?>
                                <table class="table table-striped table-hover ">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">ID Visita</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Responsable</th>
                                            <th scope="col">Nombre Visitante</th>
                                            <th scope="col">Método de llegada</th>
                                            <th scope="col">Placas</th>
                                        </tr>
                                    </thead>
                                <tbody class="table-group-divider">
                            <?php

                            while($fila = $resultado->fetch_object()){
                                $id_v = $fila -> ID_VISITA;
                                $fecha = $fila -> FECHA;
                                $nombre_i = ($fila->NOMBRE) . ''.($fila->AP_PATERNO). ' '.($fila->AP_MATERNO);
                                $nombre_v = ($fila->NOMBRES).' '.($fila->AP_PATERNO_V).' '.($fila->AP_MATERNO_V);
                                $mllegada =$fila -> MDELLEGADA;
                                $placa = $fila ->PLACAS;
                                if($placa == null){
                                    $placa = "SIN AUTO";
                                }
                                

                                echo "
                                <form action='../php/eliminarInquilino.php' method = 'POST'>
                                    <tr >
                                        <td style='width: 12%' class='align-middle'>
                                            <input  id='floatingPassword' class='form-control-plaintext'  name='ID_Visita' value='$id_v'>
                                        </td>
                                        <td style='width: 10%' class='align-middle'>
                                            <input  id='floatingPassword' class='form-control-plaintext'  name='fecha' value='$fecha'>
                                        </td>
                                        <td style='width: 25%' class='align-middle'>
                                            <input  id='floatingPassword' name='responsable' class='form-control-plaintext' style='width: 100%; font-size: 1.4rem;' value='$nombre_i'>
                                        </td>
                                        <td style='width: 25%' class='align-middle'>
                                            <input  id='floatingPassword' name='visitante' class='form-control-plaintext' value='$nombre_v'>
                                        </td>
                                        <td style='width: 18%' class='align-middle'>
                                            <input  class='form-control-plaintext' name='mllegada'  style='font-size: 1.4rem;' value='$mllegada'>
                                        </td>
                                        <td style='width: 20% ' class='align-middle'>
                                            <input  class='form-control-plaintext'  style='font-size: 1.4rem;' name='placas' value='$placa'>
                                        </td>
                                    </tr>
                                </form>";
                            }
                        
                        ?>
                                    </tbody>
                                </table>
                    </div>
                </div>

                <?php
                    include("../php/conexionbd.php");
                ?>
                <h4 class="fw-bold pt-5 pb-1">Consultas</h4>
                <div class="container ">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <div class="alert d-flex align-items-center m-0" role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                    <a class="nav-link ps-4" >Consultar Inquilinos</a>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="contenedor fondo-blanco m-auto">
                                    <h4 class="p-2">Inquilinos</h4>
                                    <div class="parent px-5 ">
                                        <div class="div2"> 
                                            <?php
                                                $consulta = "SELECT * FROM inquilino LIMIT 5; ";

                                                if($conn){
                                                    $resultado = mysqli_query($conn, $consulta);
                                                }
                                                ?>
                                                    <table class="table table-striped table-hover ">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col"># de Contrato</th>
                                                                <th scope="col">Nombre</th>
                                                                <th scope="col">CURP</th>
                                                                <th scope="col">Sexo</th>
                                                                <th scope="col">Tipo de iquilino</th>
                                                            </tr>
                                                        </thead>
                                                    <tbody class="table-group-divider">
                                                <?php

                                                while($fila = $resultado->fetch_object()){
                                                    $numcontrato = $fila -> NUMCONTRATO;
                                                    $nombre = ($fila->NOMBRE) . ' '.($fila->AP_PATERNO). ' '.($fila->AP_MATERNO);
                                                    $curp =$fila -> CURP;
                                                    $sexo = $fila-> SEXO;
                                                    $tipo = $fila -> TIPO;
                                                    
                                                    echo "
                                                    <form action='../php/eliminarInquilino.php' method = 'POST'>
                                                        <tr>
                                                            <td style='width: 12%' class='align-middle'>
                                                                <input  id='' class='form-control-plaintext'  name='numcontrato' value='$numcontrato'>
                                                            </td>
                                                            <td style='width: 35%' class='align-middle'>
                                                                <input  id='' name='nombre' class='form-control-plaintext' style='width: 100%; font-size: 1.4rem;' value='$nombre'>
                                                            </td>
                                                            <td class='align-middle'>
                                                                <input  id='' name='curp' class='form-control-plaintext' value='$curp'>
                                                            </td>
                                                            <td style='width: 10%' class='align-middle'>
                                                                <input  class='form-control-plaintext' name='sexo'  style='font-size: 1.4rem;' value='$sexo'>
                                                            </td>
                                                            <td style='width: 15% ' class='align-middle'>
                                                                <input  class='form-control-plaintext'  style='font-size: 1.4rem;' name='tipo' value='$tipo'>
                                                            </td>
                                                        </tr>
                                                    </form>
                                                    ";
                                                }
                                            ?>
                                                </tbody>
                                                </table>
                                        </div>
                                    </div>
                                    <div class="contenedor pb-5 d-flex justify-content-end">
                                        <a type="submit" href="consultas/Adinquilinos.php" class="btn btn-outline-secondary"  style="font-size: 1.3rem;">Ir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <div class="alert d-flex align-items-center m-0" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg>
                                <a class="nav-link ps-4" >Consultar Vehículos</a>
                            </div>
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="alert d-flex align-items-center m-0" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg>
                                <a class="nav-link ps-4" >Consultar Reportes</a>
                            </div>
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        <h4 class="fw-bold pt-5 pb-1">Reportes</h4>
                            <div class="parent px-5 ">
                                <div class="div2"> 
                                    <div class="d-flex justify-content-end py-3">
                                        <form method="post">
                                            <input type="date" name="fecha" class="align-middle">
                                            <input type="submit" value="BUSCAR" class="btn btn-info" style="font-size: 1.3rem">
                                        </form>
                                    </div>

                                        <?php
                                            $consulta = "SELECT R.ID AS ID_R, R.TIPO AS TIPO_R, DATE_FORMAT(FECHA, '%d/%m/%y') AS FECHA, ESTATUS, DESCRIPCIÓN, I.NOMBRE AS NOMBRE_I, AP_PATERNO, AP_MATERNO from reportes R, inquilino I where R.NUMCONTRATO = I.NUMCONTRATO AND R.CURP = I.CURP;";
                                            
                                            if($conn){
                                                $resultado = mysqli_query($conn, $consulta);
                                            }
                                            ?>
                                                <table class="table table-striped table-hover ">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Fecha</th>
                                                            <th scope="col">Tipo</th>
                                                            <th scope="col">Hecho por</th>
                                                            <th scope="col">Descripción</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                <tbody class="table-group-divider">
                                            <?php

                                            while($fila = $resultado->fetch_object()){
                                                $id_r = $fila -> ID_R;
                                                $fecha =$fila -> FECHA;
                                                $nombre = ($fila->NOMBRE_I) . ' '.($fila->AP_PATERNO). ' '.($fila->AP_MATERNO);
                                                $tipo = $fila -> TIPO_R;
                                                $des = $fila -> DESCRIPCIÓN;
                                                
                                                echo "
                                                <form action='' method = 'POST'>
                                                    <tr>
                                                        <td style='width: 8%' class='align-middle'>
                                                            <input  id='' class='form-control-plaintext'  name='ID_reporte' value='$id_r'>
                                                        </td>
                                                        <td style='width: 12%' class='align-middle'>
                                                            <input  id='' name='fecha' class='form-control-plaintext' style='width: 100%; font-size: 1.4rem;' value='$fecha'>
                                                        </td>
                                                        <td style='width: 12%' class='align-middle'>
                                                            <input  id='' name='tipo' class='form-control-plaintext' value='$tipo'>
                                                        </td>
                                                        <td style='width: 22%' class='align-middle'>
                                                            <input  id='' name='nombre' class='form-control-plaintext' style='width: 100%; font-size: 1.4rem;' value='$nombre'>
                                                        </td>
                                                        <td style='width: 38%' class='align-middle'>
                                                            <input  id='' name='descripcion' class='form-control-plaintext' style='width: 100%; font-size: 1.4rem;' value='$des'>
                                                        </td>
                                                    </tr>
                                                </form>";
                                            }
                                        
                                        ?>
                                            </tbody>
                                            </table>
                                    </div>
                                </div>
                                </div>
                                <div class="contenedor pb-5 d-flex justify-content-end">
                                        <a type="submit" href="consultas/areaComunC.php" class="btn btn-outline-secondary"  style="font-size: 1.3rem;">Ir</a>
                                </div>
                            </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    <div class="alert d-flex align-items-center m-0" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                        <a class="nav-link ps-4" >Consultar Quejas</a>
                            </div>
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
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