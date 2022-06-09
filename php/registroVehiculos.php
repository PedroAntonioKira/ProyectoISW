<?php
    include("../../php/conexionbd.php");
    session_name("usuarioinq");
    session_start();

    $placas = trim($_POST['placas']);
    $modelo = trim($_POST['modelo']);
    $marca = trim($_POST['marca']);
    $color = trim($_POST['color']);

    if($conn){
        $consulta1 = "INSERT INTO AUTOMOVILES VALUES('$placas', '$modelo', '$marca', '$color');";
        $resultado = mysqli_query($conn, $consulta1);
        if($resultado){
            $consulta2 = "INSERT INTO MANEJAR VALUES('$_SESSION[NCONTRATO]', '$_SESSION[CURP]', '$placas');";

            echo '<script language="javascript">alert("Vehículo registrado exitosamente!");</script>';
            header ("refresh: 1; url= ../views/registros/registroAutomovil.php"); 
            mysqli_free_result($resultado);
            mysqli_close($conn);
        }
        
    }
?>