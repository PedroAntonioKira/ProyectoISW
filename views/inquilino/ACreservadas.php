<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    
    <!-- Librerias Bootstrap -->
    <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/styleConsultas.css">

    <!--CDNs externos-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

</head>
<body >
    
    <header class="fondo-blanco">
        <?php 
            include_once "../plantilla/header2.php";
        ?>
    </header>

    <div class="fondo-azul p-5">
        <div class="contenedor fondo-blanco m-auto">
            <h1 class="p-5">Mis reservaciones</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-9 align-self-center">
                        <div class="parent px-5 ">
                            <div class="div2"> 
                                <?php
                                    $inq = $_SESSION["NCONTRATO"];
                                    $curp = $_SESSION["CURP"];
                                    $consulta = "SELECT A.ID, A.NOMBRE, R.FECHA  FROM area_comun A, reservar R, inquilino I WHERE I.NUMCONTRATO = '$inq' AND I.CURP = '$curp' AND I.NUMCONTRATO = R.NUMCONTRATO;";
                                    include("../../php/conexionbd.php");

                                    if($conn){
                                        $resultado = mysqli_query($conn, $consulta);
                                    }
                                    ?>
                                        <table class="table table-striped table-hover">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">ID Área</td>
                                                    <th scope="col">Nombre</td>
                                                    <th scope="col">Fecha de reservación</td>
                                                    <th scope="col"></td>
                                                </tr>
                                            </thead>
                                        <tbody class="table-group-divider">
                                    <?php

                                    while($fila = $resultado->fetch_object()){
                                        $ided = $fila -> ID;
                                        $nombre = $fila->NOMBRE;
                                        $fecha =$fila -> FECHA;
                                    
                                        echo "
                                        <form action='' method = 'POST'>
                                            <tr>
                                                <td style='width: 19%'  class='align-middle'>
                                                    <input  id='floatingPassword' class='form-control-plaintext' name='id' value='$ided'>
                                                </td>
                                                <td style='width: 40%' class='align-middle'>
                                                    <input  id='floatingPassword' name='nombre' class='form-control-plaintext' style='font-size: 1.4rem; width: 100%' value='$nombre'>
                                                </td>
                                                <td style='width: 30%' class='align-middle'>
                                                    <input  id='floatingPassword' name='objetivo' style='font-size: 1.4rem;' class='form-control' value='$fecha' >
                                                </td>
                                                
                                                <td class='align-middle'> 
                                                    <button type='submit' class='btn btn-light' name='cambiar'>
                                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'></path>
                                                        </svg>
                                                    </button>
                                                    <button type='submit' class='btn btn-light' name='eliminar'>
                                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'></path>
                                                        </svg>
                                                    </button>
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
                </div>
            </div>
           

            <div class="contenedor pb-5 d-flex justify-content-end">
                <a type="submit" href="../inquilino/reservarAC.php" class="btn btn-outline-dark" style="font-size: 1.5rem;">Hacer una Reservación</a>
            </div>
        </div>
    </div>
    

    <footer class="footer">
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