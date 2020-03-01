<?php
    $DB_HOSTNAME="localhost";
    $DB_USERNAME="root";
    $DB_PASSWORD="";
    $DB_DBNAME="tay";
    
    $connect=mysqli_connect($DB_HOSTNAME,$DB_USERNAME,$DB_PASSWORD,$DB_DBNAME);
    
    if($connect)
    {
        echo " ";
    }
    else{
        die("failed to connect<br>please check your network and try againg").mysqli_connect_error();
    }
?>