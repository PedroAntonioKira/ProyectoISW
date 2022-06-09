<?php
    include("conexionbd.php");

    $sec = trim($_POST['Seccion']);
    $precio  = floatval(trim($_POST['Precio']));
    $npisos = intval(trim($_POST['NumPisos']));
    $nbanios = floatval(trim($_POST['NumBaños']));
    $ncuart = intval(trim($_POST['NumCuartos']));
    $dancho = intval(trim($_POST['Ancho']));
    $dprof = intval(trim($_POST['Profundo']));
    $dalto = trim($_POST['Alto']);

    //calculamos los m2 del terreno de la casa
    $m2 = $dancho * $dprof;
    $numaleatorio = rand(1000000, 9999999);
    $const = strval($m2).' metros cuadrados con pisos de una altura de: '.strval($dprof);
    //generando un número aleatorio para el id
    $id = (substr($sec, 0, 1)).(substr($sec, -2, 2)).(strval($numaleatorio));
    if($conn){
        $consulta = "INSERT INTO INMUEBLE VALUES ('$id', '$const', '$ncuart', '$nbanios', '$precio', '$sec', '$npisos');";

        $resultado = mysqli_query($conn, $consulta);
        if($resultado){
            echo '<script language="javascript">alert("Inmueble registrada exitosamente!");</script>';
            header ("refresh: 1; url= ../views/registros/registroInmueble.php"); 
            /*mysqli_free_result($resultado);
            mysqli_close($conn);*/
        }else{
            /*mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";*/
            echo '<script language="javascript">alert("OH no! Ha ocurrido un error");</script>';
            header ("refresh: 1; url= ../views/registros/registroInmueble.php");
        }
    }
?>