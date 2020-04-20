<?php
    include "Header.php";
    $dbhost = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'easydata';

    $conn = mysqli_connect('localhost', 'root','','easydata');

    if($conn){
        mysqli_query($conn, "SET NAMES 'UTF 8'");
    }
    else {
        echo "Connetion pèo".mysqli_connect_error() ;
    }
?>
