<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas Comunes</title>
    
    <!-- Librerias Bootstrap -->
    <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Hojas CSS propias -->
    <link rel="stylesheet" href="../../css/normalize.css">
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
            <h1 class="pt-5 px-5">Áreas Comunes</h1>
            <div class="parent px-5 ">
                <div class="div2"> 
                    <?php
                        $consulta = "SELECT * FROM area_comun; ";
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
                                        <th scope="col">Objetivo</td>
                                        <th scope="col">Descripción</td>
                                    </tr>
                                </thead>
                            <tbody class="table-group-divider">
                        <?php

                        while($fila = $resultado->fetch_object()){
                            $ided = $fila -> ID;
                            $nombre = $fila->NOMBRE;
                            $objetivo =$fila -> OBJETIVO;
                            $des =$fila -> DESCRIPCION;
                            echo "
                            <form action='' method = 'POST'>
                                <tr>
                                    <td style='width: 8%'  class='align-middle'>
                                        <input  id='floatingPassword' class='form-control-plaintext' name='id' value='$ided'>
                                    </td>
                                    <td style='width: 20%' class='align-middle'>
                                        <input  id='floatingPassword' name='nombre' class='form-control' style='font-size: 1.4rem; width: 100%' value='$nombre'>
                                    </td>
                                    <td style='width: 25%' class='align-middle'>
                                        <input  id='floatingPassword' name='objetivo' style='font-size: 1.4rem;' class='form-control' value='$objetivo' >
                                    </td>
                                    <td style='width: 35%; ' class='align-middle'>
                                        <textarea  id='floatingPassword' name='desc' style='font-size: 1.4rem;' class='form-control' value='$des'> $des</textarea>
                                    </td>
                                </tr>
                            </form>";
                        }
                    ?>
                        </tbody>
                        </table>
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