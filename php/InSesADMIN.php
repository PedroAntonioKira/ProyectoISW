<?php
    include ("conexionbd.php");

    $correo = trim($_POST['correo']);
    $contra = trim($_POST['pass']);
    $pos = strpos($correo, "@admin.comsafe.com");
    $pos2 = strpos($correo, "@pseguridad.comsafe.com");

    if($conn){
        if($pos){
            $consulta = "SELECT * FROM ADMINISTRADOR WHERE CORREO= '$correo' AND CONTRASEÑA = '$contra'";
            $resultado = mysqli_query($conn, $consulta);
            $rows = mysqli_num_rows($resultado);
            if($rows >= 1){
                $extraido = mysqli_fetch_array($resultado);
                session_name("usuario");
                session_start();
                $_SESSION["Nombre"] = $extraido["NOMBRES"];
                echo '<script language="javascript">alert("BIENVENIDO!");</script>';
                header ("refresh: 1; url= ../views/inicioADMIN.php"); 
                //echo $_SESSION["Nombre"];
                mysqli_free_result($resultado);
                mysqli_close($conn);
            }      
        }else if($pos2){
            $consulta = "SELECT * FROM PERSONAL_SEGURIDAD WHERE CORREO ='$correo' AND CONTRASEÑA = '$contra';";
            $resultado = mysqli_query($conn, $consulta);
            $rows = mysqli_num_rows($resultado);
            if($rows >= 1){
                $extraido = mysqli_fetch_array($resultado);
                session_name("usuario");
                session_start();
                $_SESSION["Nombre"] = $extraido["NOMBRES"];
                echo '<script language="javascript">alert("BIENVENIDO!");</script>';
                header ("refresh: 1; url= ../views/inicioPS.php"); 
                //echo $_SESSION["Nombre"];
                mysqli_free_result($resultado);
                mysqli_close($conn);
            }      
        }else{
            $consulta = "SELECT * FROM INQUILINO WHERE CORREO = '$correo' AND CONTRASEÑA = '$contra';";
            $resultado = mysqli_query($conn, $consulta);
            $rows = mysqli_num_rows($resultado);
            if($rows >= 1){
                $extraido = mysqli_fetch_array($resultado);
                session_name("usuario");
                session_start();
                $_SESSION["Nombre"] = $extraido["NOMBRES"];
                echo '<script language="javascript">alert("BIENVENIDO!");</script>';
                header ("refresh: 1; url= ../views/inicioINQ.php"); 
                //echo $_SESSION["Nombre"];
                mysqli_free_result($resultado);
                mysqli_close($conn);
            }      
        }
    }
?>