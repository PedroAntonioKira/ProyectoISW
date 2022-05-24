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
        $nom = "";
        for($i = 0; $i < count($nombres);++$i){
            if($i < (count($nombres)-2)){
                $nom .= $nombres[$i].' ';
            }
            if($i == (count($nombres)-2)){
                $app = $nombres[$i];
            }else if($i == (count($nombres)-1)){
                $apm = $nombres[$i];
            }
        }
        

        $tipo = trim($_POST['tipo']);
        $sexo = trim($_POST['sexo']);

        $consulta = "UPDATE INQUILINO SET NOMBRE = '$nom', AP_PATERNO = '$app' , AP_MATERNO = '$apm', TIPO = '$tipo', SEXO = '$sexo' WHERE NUMCONTRATO= '$numcontrato' AND CURP = '$curp';";

        $resultado = mysqli_query($conn, $consulta);
        
        if($resultado){
            header ("refresh: 1; url= ./../Adinquilinos.php");
            echo "<script language='javascript'>alert('$nombres[0]');</script>";
        }else{
            mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("Ha ocurriod un error");</script>';
            header ("refresh: 1; url= ./../Adinquilinos.php");
        }
    }    
?>