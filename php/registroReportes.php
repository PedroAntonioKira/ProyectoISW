<?php
    include("../../php/conexionbdv.php");

    session_name("usuarioinq");
    session_start();
    
    $tipo = trim($_POST['tiporep']);
    $fecha = strval(date('Y-m-d'));
    $estatus = "en espera";
    $descrpcion = trim($_POST['descripcion']);
    $rfc = "ffffffffff";

    $numaleatorio = rand(1000000, 9999999);
    $id = (substr($tipo, 0, 3)).strval($numaleatorio);
    if($conn){
        $consulta = "INSERT INTO REPORTES VAUES('$id', '$tipo', '$fecha', '$estatus', '$descrpcion', '$_SESSION[NCONTRATO]', '$_SESSION[CURP]', '$rfc');";
        $resultado = mysqli($conn, $consulta);
        if($resultado){
            echo '<script language="javascript">alert("Reporte registrado exitosamente!");</script>';
            header ("refresh: 1; url= ../views/registros/registroReportes.php"); 
        }else{
            echo '<script language="javascript">alert("OH no! Ha ocurrido un error");</script>';
            header ("refresh: 1; url= ../views/registros/registroReportes.php");
        }
    }

?>
