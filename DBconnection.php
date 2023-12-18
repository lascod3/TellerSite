<?php

    $serverName = "localhost";
    $username = "root";
    $password ="";
    $dbName = "TellerSite";
    $con = mysqli_connect($serverName,$username,$password, $dbName);
    if(!$con){
     die("Connection Failed".mysqli_connect_error($con));
     
    }
    //    echo"Connected to the server successful";
?>
