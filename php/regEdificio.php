<?php
    include("conexionbd.php");

    $sec = trim($_POST['NombreSC']);
    
    $numaleatorio = rand(1000000, 9999999);
    //generando un número aleatorio para el id
    $id = (substr($sec, 0, 3)).(strval($numaleatorio));
    if($conn){
        $consulta = "INSERT INTO SECCION VALUES ('$id','$sec');";

        $resultado = mysqli_query($conn, $consulta);
        if($resultado){
            echo '<script language="javascript">alert("Seccion registrada exitosamente!");</script>';
            header ("refresh: 1; url= ../views/consultas/edificios.php"); 
            /*mysqli_free_result($resultado);
            mysqli_close($conn);*/
        }else{
            /*mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";*/
            echo '<script language="javascript">alert("OH no! Ha ocurrido un error");</script>';
            header ("refresh: 1; url= ../views/registros/registro_Edificio.php");
        }
    }
?>