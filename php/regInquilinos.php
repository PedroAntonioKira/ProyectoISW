<?php
    include("conexionbd.php");
    include("calcularFechaNacimiento.php");

    $nombre = trim($_POST['Nombre']);
    $app = trim($_POST['Apellido_Paterno']);
    $apm = trim($_POST['Apellido_Materno']);
    $numcontrato = trim($_POST['NumCont']);
    $curp = trim($_POST['Curp']);
    $tipo = trim($_POST['TInqui']);
    $correo = trim($_POST['Correo_Electronico']);

    $fn = fecha($curp);
    $g = genero($curp);
    if($conn){
        $consulta = "INSERT INTO INQUILINO VALUES('$nombre', '$app', '$apm', '$numcontrato', 'ssssssssss', '$fn', '$curp', '$tipo', '$g', '$correo');";
        $resultado = mysqli_query($conn, $consulta);

        if($resultado){
            echo '<script language="javascript">alert("Inquilino registrado exitosamente!");</script>';
            header ("refresh: 1; url= ../views/registros/registroInquilino.php"); 
            mysqli_free_result($resultado);
            mysqli_close($conn);
        }else{
            mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("OH no! Ha ocurrido un error");</script>';
            header ("refresh: 1; url= ../views/registros/registroInquilino.php");
        }
    }
?>