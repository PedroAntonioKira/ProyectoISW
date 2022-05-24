<?php
    include ("conexionbd.php");

    $id = trim($_POST['id']);

    if(isset($_POST['eliminar'])){
        $consulta = "Delete From INMUEBLE WHERE ID= '$id';";
        $resultado = mysqli_query($conn, $consulta);
        
        if($resultado){
            header ("refresh: 1; url= ./../Inmuebles.php");
            echo '<script language="javascript">alert("Inquilino Eliminado");</script>';
        }else{
            mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("Ha ocurriod un error");</script>';
            header ("refresh: 1; url= ./../Inmuebles.php");
        }
    }else if(isset($_POST['cambiar'])){
        $dim = trim($_POST['dim']);
        $cuartos = (int)trim($_POST['cuartos']);
        $banios = (float)trim($_POST['banios']);
        $precio = trim($_POST['precio']);

        /*$consulta = "UPDATE INMUEBLE SET DIMENSIONES = '$dim', N°_CUARTOS = '$cuartos' , N°_BAÑOS = '$banios', PRECIO = '$precio' WHERE ID= '$id';";
        */
        $consulta = "UPDATE INMUEBLE SET DIMENSIONES = '$dim', N°_CUARTOS = '$cuartos', N°_BAÑOS = '$banios' WHERE ID= '$id';"; 
        $resultado = mysqli_query($conn, $consulta);
        
        if($resultado){
            header ("refresh: 1; url= ./../Inmuebles.php");
            echo '<script language="javascript">alert("Datos Actualizados");</script>';
        }else{
            mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("Ha ocurriod un error");</script>';
            header ("refresh: 1; url= ./../Inmuebles.php");
        }
        
    }
?>