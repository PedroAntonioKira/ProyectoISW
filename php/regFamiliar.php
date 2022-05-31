<?php
    session_name("usuarioinq");
    start_session();
    include("conexionbd.php");

    $nom = trim($_POST['nombres']);
    $app = trim($_POST['apaterno']);
    $apm = trim($_POST['amanterno']);
    $curp = trim($_POST['curp']);
    $fnac = trim($_POST['fnaci']);
    $correo = trim($_POST['correo']);
    $pass = trim($_POST['pass']);
    $sexo = trim($_POST['genero']);
    if($conn){
        $consulta = "INSERT INTO INQUILINO VALUES('$nom', '$app', '$apm', '$_SESSION[NCONTRATO]', '$pass', '$fnac', '$curp', 'FAMILIAR', '$sexo', '$correo');";

        $resultado = mysqli_query($conn, $consulta);
        if($resultado){
            echo '<script language="javascript">alert("FAMILAIR REGISTRADO!");</script>';
            header ("refresh: 1; url= ../views/inicioInquilino.php"); 
        }else{
            echo '<script language="javascript">alert("Oh no ha ocurrido un error!Vuelve a intentarlo");</script>';
            header ("refresh: 1; url= ../views/registroFamiliar.php.php"); 
        }
    }
?>