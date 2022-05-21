<?php
    include ("conexionbd.php");

    $correo = trim($_POST['correo']);
    $contra = trim($_POST['pass']);

    if($con){
        $consulta = "SELECT * FROM ADMINISTRADOR WHERE CORREO= '$correo' AND CONTRASEÑA = '$contra'";
        $resultado = mysqli_query($con, $consulta);
        $rows = mysqli_num_rows($resultado);
        if($rows >= 1){
            
            echo '<script language="javascript">alert("CORREO O CONTRASEÑA VALIDOS");</script>';
            header ("refresh: 1; url= ./../inicioADMIN.html"); 
        }else{
            mysqli_free_result($resultado);
            mysqli_close($con);
            //echo "REchazado :(";
            echo '<script language="javascript">alert("CORREO O CONTRASEÑA INCORRECTOS");</script>';
            header ("Location: PROYECTOISW/ISADMIN.php");
        }
    }
?>