<?php
    include ("conexionbd.php");

    $numcontrato = trim($_POST['numcontrato']);
    $curp = trim($_POST['curp']);

    if(isset($_POST['eliminar'])){
        $consulta = "Delete From INQUILINO WHERE NUMCONTRATO= '$numcontrato' AND CURP = '$curp';";
        $resultado = mysqli_query($conn, $consulta);
        
        if($resultado){
            header ("refresh: 1; url= ./../Adinquilinos.php");
            echo '<script language="javascript">alert("Inquilino Eliminado");</script>';
        }else{
            mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("Ha ocurriod un error");</script>';
            header ("refresh: 1; url= ./../Adinquilinos.php");
        }
    }else if(isset($_POST['cambiar'])){
        $nombre = trim($_POST['nombre']);
        $nombres = explode(" ", $nombre);
        $tipo = trim($_POST['tipo']);
        $sexo = trim($_POST['sexo']);

        $consulta = "UPDATE INQUILINO SET NOMBRE = '$nombres[0]', AP_PATERNO = '$nombres[1]' , AP_MATERNO = '$nombres[2]', TIPO = '$tipo', SEXO = '$sexo' WHERE NUMCONTRATO= '$numcontrato' AND CURP = '$curp';";

        $resultado = mysqli_query($conn, $consulta);
        
        if($resultado){
            header ("refresh: 1; url= ./../Adinquilinos.php");
            echo '<script language="javascript">alert("Datos Actualizados");</script>';
        }else{
            mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("Ha ocurriod un error");</script>';
            header ("refresh: 1; url= ./../Adinquilinos.php");
        }
        
    }
    
    if($con){
        
        
    }
?>