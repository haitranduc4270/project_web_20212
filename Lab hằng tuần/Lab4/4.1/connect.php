<?php
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="mytest";

    $conn = mysqli_connect($dbhost, $dbuser, $dbuser, $dbname);

    if($conn){
        mysqli_query($conn, "SET NAMES 'utf8'");
    }else {
        echo "Connect mySQL Error".mysqli_connect_error();
    }
?>