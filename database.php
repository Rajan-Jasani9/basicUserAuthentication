<?php 

    $dbserver = "localhost:3304";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "web1";
    try{
        $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
    }
    catch( mysqli_sql_exception){
        echo "Not connected";
    }

?>