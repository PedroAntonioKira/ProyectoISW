
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Familiares</title>
    
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
            <h1 class="p-5">Mis familiares</h1>
            <div class="parent px-5 ">
                <div class="div2"> 
                    <?php
                        $inq = $_SESSION["NCONTRATO"];
                        $consulta = "SELECT * FROM inquilino WHERE NUMCONTRATO = '$inq' AND TIPO != 'DUEÑO' ; ";
                        include("../../php/conexionbd.php");

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
                                        <td style='width: 15%' class='align-middle'>
                                            <input  id='floatingPassword' class='form-control-plaintext'  name='numcontrato' value='$numcontrato'>
                                        </td>
                                        <td style='width: 25%' class='align-middle'>
                                            <input  id='floatingPassword' name='nombre' class='form-control-plaintext' style='width: 100%; font-size: 1.4rem;' value='$nombre'>
                                        </td>
                                        <td style='width: 20%' class='align-middle'>
                                            <input  id='floatingPassword' name='curp' class='form-control-plaintext' value='$curp'>
                                        </td>
                                        <td style='width: 12%' class='align-middle'>
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
        </div>
    </div>

    <footer class="footer" id="footer-wrapper">
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