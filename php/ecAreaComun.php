<?php
    include ("conexionbd.php");

    $id = trim($_POST['id']);

    if(isset($_POST['eliminar'])){
        $consulta = "Delete From AREA_COMUN WHERE ID= '$id';";
        $resultado = mysqli_query($conn, $consulta);
        
        if($resultado){
            header ("refresh: 1; url= ./../Inmuebles.php");
            echo '<script language="javascript">alert("Area Eliminada");</script>';
        }else{
            mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("Ha ocurriod un error");</script>';
            header ("refresh: 1; url= ../../views/consultas/Inmuebles.php");
        }
    }else if(isset($_POST['cambiar'])){
        $nomac = trim($_POST['nombre']);
        $objac = (int)trim($_POST['objetivo']);
        $descac = (float)trim($_POST['desc']);
        

        /*$consulta = "UPDATE INMUEBLE SET DIMENSIONES = '$dim', N°_CUARTOS = '$cuartos' , N°_BAÑOS = '$banios', PRECIO = '$precio' WHERE ID= '$id';";
        */
        $consulta = "UPDATE AREA_COMUN SET NOMBRE = '$nomac', OBJETIVO = '$objac', DESCRIPCION = '$descac' WHERE ID= '$id';"; 
        $resultado = mysqli_query($conn, $consulta);
        
        if($resultado){
            header ("refresh: 1; url= ../../views/consultas/Inmuebles.php");
            echo '<script language="javascript">alert("Datos Actualizados");</script>';
        }else{
            mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("Ha ocurrido un error");</script>';
            header ("refresh: 1; url= ./../Inmuebles.php");
        }
        
    }
?>