<?php
    include('conexionbd.php');
    $nom = trim($_POST['NombreAC']);
    $obj = trim($_POST['Objetivo']);
    $desc = trim($_POST['Descripcion']);

    $cadena = explode(" ", $nom);
    $id = "";
    for($i = 0; $i < count($cadena); ++$i){
        $in = substr($cadena[$i], 0, 2);

        $id .= $in;
    }
    if($conn){
        $consulta = "INSERT INTO AREA_COMUN VALUES('$id', '$nom', '$obj', '$desc');";

        $resultado = mysqli_query($conn, $consulta);
        if($resultado){
            echo '<script language="javascript">alert("Área común registrada exitosamente!");</script>';
            header ("refresh: 1; url= ../views/registros/registroAC.php"); 
            mysqli_free_result($resultado);
            mysqli_close($conn);
        }else{
            mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("OH no! Ha ocurrido un error");</script>';
            header ("refresh: 1; url= ../views/registros/registroAC.php");
        }
    }
?>