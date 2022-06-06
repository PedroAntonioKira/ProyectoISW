<?php
    include ("conexionbd.php");

    $correo = trim($_POST['correo']);
    $contra = trim($_POST['pass']);
    $pos = strpos($correo, "@admin.comsafe.com");
    $pos2 = strpos($correo, "@pseguridad.comsafe.com");

    if($conn){
        if($pos){
            $consulta = "SELECT * FROM ADMINISTRADOR WHERE CORREO= '$correo' AND CONTRASEÑA = '$contra';";
            $resultado = mysqli_query($conn, $consulta);
            $rows = mysqli_num_rows($resultado);
            if($rows >= 1){
                
                $extraido = mysqli_fetch_array($resultado);
                session_id("usuarioad");
                session_start();
                $_SESSION["Nombre"] = $extraido["NOMBRES"];
                $_SESSION["RFCad"] = $extraido["RFC"];
                //echo $_SESSION["Nombre"];
                echo '<script language="javascript">alert("BIENVENIDO! ");</script>';
                header ("refresh: 1; url= ../views/inicioADMIN.php"); 
                //echo $_SESSION["Nombre"];
                //echo session_id();
                mysqli_free_result($resultado);
                mysqli_close($conn);
            }  else {
                header("Location: ../views/login.php");
                die();
            }     
        }else if($pos2){
            $consulta = "SELECT * FROM PERSONAL_DE_SEGURIDAD WHERE CORREO ='$correo' AND CONTRASEÑA = '$contra';";
            $resultado = mysqli_query($conn, $consulta);
            $rows = mysqli_num_rows($resultado);
            if($rows >= 1){
                $extraido = mysqli_fetch_array($resultado);
                session_id("usuariops");
                session_start();
                $_SESSION["Nombre"] = $extraido["NOMBRES"];
                $_SESSION["RFC"] = $extraido["RFC"];
                echo '<script language="javascript">alert("BIENVENIDO!");</script>';
                header ("refresh: 1; url= ../views/inicioPSeguridad.php"); 
                //echo $_SESSION["Nombre"];
                //echo session_id();
                mysqli_free_result($resultado);
                mysqli_close($conn);
            } else {
                header("Location: ../views/login.php");
                die();
            }      
        }else{
            $consulta = "SELECT * FROM INQUILINO WHERE CORREO = '$correo' AND CONTRASEÑA = '$contra';";
            $resultado = mysqli_query($conn, $consulta);
            $rows = mysqli_num_rows($resultado);
            if($rows >= 1){
                
                $extraido = mysqli_fetch_array($resultado);
                session_id("usuarioinq");
                session_start();
                $_SESSION["Nombre"] = $extraido["NOMBRE"];
                $_SESSION["NCONTRATO"] = $extraido["NUMCONTRATO"];
                $_SESSION["CURP"] = $extraido["CURP"];
                echo '<script language="javascript">alert("BIENVENIDO!");</script>';
                header ("refresh: 1; url= ../views/inicioInquilino.php"); 
                //echo $_SESSION["Nombre"];
                //echo session_id();
                mysqli_free_result($resultado);
                mysqli_close($conn);
            } else {
                header("Location: ../views/login.php");
                die();
            }    
        } 
    }
?>