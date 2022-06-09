<?php
    include ("conexionbd.php");
    session_name("usuarioinq");
    session_start();
    
    $placas = trim($_POST['placas']);

    if(isset($_POST['eliminar'])){
        $consulta = "Delete From AUTOMOVILES WHERE PLACAS= '$placas';";
        $resultado = mysqli_query($conn, $consulta);
        
        if($resultado){
            $consulta2 = "DELETE FROM MANEJAR WHERE NUMCONTRATO = '$_SESSION[NCONTRATO]' AND CURP = '$_SESSION[CURP]' AND PLACAS = '$placas';";
            header ("refresh: 1; url= ./../Vehiculos.php");
            echo '<script language="javascript">alert("Vehiculo Eliminado Exitosamente");</script>';
        }else{
            mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("Ha ocurriod un error");</script>';
            header ("refresh: 1; url= ./../Vehiculos.php");
        }
    }else if(isset($_POST['cambiar'])){
        $modelo = trim($_POST['modelo']);
        $color = trim($_POST['color']);
        $marca = trim($_POST['marca']);

        /*$consulta = "UPDATE INMUEBLE SET DIMENSIONES = '$dim', N°_CUARTOS = '$cuartos' , N°_BAÑOS = '$banios', PRECIO = '$precio' WHERE ID= '$id';";
        */
        $consulta = "UPDATE VEHICULO SET PLACAS = '$placas', MODELO = '$modelo', COLOR = '$color', MARCA = '$marca' WHERE PLACAS = '$placas';"; 
        $resultado = mysqli_query($conn, $consulta);
        
        if($resultado){
            $consulta2 = "UPDATE MANEJAR SET PLACAS = '$placas' WHERE NUMCONTRATO = '$_SESSION[NCONTRATO]' AND CURP = '$_SESSION[CURP]';";
            header ("refresh: 1; url= ./../Vehiculos.php");
            echo '<script language="javascript">alert("Datos Actualizados");</script>';
        }else{
            mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("Ha ocurriod un error");</script>';
            header ("refresh: 1; url= ./../Vehiculos.php");
        }
        
    }
?>