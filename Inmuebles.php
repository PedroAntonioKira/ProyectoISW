<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inmuebles</title>

    <style>
        .parent {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-template-rows: repeat(8, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .div1 { grid-area: 1 / 1 / 9 / 1; }
        .div2 { grid-area: 1 / 1 / 9 / 8; }
    </style>
</head>
<body >
        <header>
            <nav class="container " >
            <div class="py-1 bg-light border-bottom row align-items-center ">
                <div class="col">
                    <img src="./img/LogoVertical.svg" height="60"></img>
                </div>
                <div class="d-flex flex-wrap justify-content-end col">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="inicioADMIN.html" class="nav-link link-dark px-2">Iniciar Sesión <i class="fas fa-sign-in-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>
        </header>

        <div class="parent">
        <div class="div1"> 
            
        </div>
        <div class="div2"> 
            <?php
                $consulta = "SELECT * FROM INMUEBLE; ";
                include("php/conexionbd.php");

                if($con){
                    $resultado = mysqli_query($con, $consulta);
                }
                ?>
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID INMUEBLE</td>
                                <th scope="col">DIMENSIONES</td>
                                <th scope="col">N° CUARTOS</td>
                                <th scope="col">N° BAÑOS</td>
                                <th scope="col">PRECIO</td>
                                <th scope="col">SECCION</td>
                                <th scope="col">ACCIONES</td>
                            </tr>
                        </thead>
                      <tbody>
                <?php

                while($fila = $resultado->fetch_object()){
                    $ided = $fila -> ID;
                    $dimensiones = $fila->DIMENSIONES;
                    $ncuartos =$fila -> N°_CUARTOS;
                    $nbaños = $fila-> N°_BAÑOS;
                    $precio = $fila -> PRECIO;
                    $seccion = $fila -> IDS;
                    echo "<form action='php/ecInmueble.php' method = 'POST'><tr><td style='width: 10%'><input  id='floatingPassword' class='form-control-plaintext'  name='id' value='$ided'></td><td style='width: 30%'><input  id='floatingPassword' name='dim' style='width: 100%' value='$dimensiones'></td><td><input  id='floatingPassword' name='cuartos' class='form-control-plaintext' value='$ncuartos'></td><td style='width: 10%'><input  class='form-control' name='banios'  value='$nbaños'></td><td style='width: 15%'><input  class='form-control' name='precio' value='$precio'></td> <td style='width: 10%'><input  id='floatingPassword' class='form-control-plaintext'  name='ed' value='$ided'></td><td><button class='btn btn-custom m-3'  type='submit' style='background-color: skyblue;' name='eliminar' >Eliminar</button><button class='btn btn-custom m-3'  type='submit' style='background-color: skyblue;' name='cambiar'>Cambiar</button></td></form></tr>";
                }
            ?>

        </div>
        </div>
</body>
</html>