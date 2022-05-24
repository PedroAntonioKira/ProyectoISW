<?php
    include ("conexionbd.php");

    $correo = trim($_POST['correo']);
    $contra = trim($_POST['pass']);

    if($conn){
        $consulta = "SELECT * FROM ADMINISTRADOR WHERE CORREO= '$correo' AND CONTRASEÑA = '$contra'";
        $resultado = mysqli_query($conn, $consulta);
        $rows = mysqli_num_rows($resultado);
        if($rows >= 1){
            $extraido = mysqli_fetch_array($resultado);
            session_name("usuario");
            session_start();
            $_SESSION["Nombre"] = $extraido["NOMBRES"];
            echo '<script language="javascript">alert("CORREO O CONTRASEÑA VALIDOS");</script>';
            header ("refresh: 1; url= ../views/inicioADMIN.php"); 
            //echo $_SESSION["Nombre"];
            mysqli_free_result($resultado);
            mysqli_close($conn);
        }else{
            mysqli_free_result($resultado);
            mysqli_close($conn);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("CORREO O CONTRASEÑA INCORRECTOS");</script>';
            header ("Location: PROYECTOISW/ISADMIN.php");
        }
    }
?>