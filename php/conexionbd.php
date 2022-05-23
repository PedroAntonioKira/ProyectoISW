<?php
    /*$host="csdbserver.mysql.database.azure.com";
    $port=3306;
    $socket="";
    $user="top";
    $password="AZCSDBpass1";
    $dbname="comsafe";
    
    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());
    */
    $conn = mysqli_init(); 
    mysqli_ssl_set($conn,NULL,NULL, "D:\DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
    mysqli_real_connect($conn, "csdbserver.mysql.database.azure.com", "top", "AZCSDBpass1", "comsafe", 3306, MYSQLI_CLIENT_SSL);
    //$con->close();
    ?>