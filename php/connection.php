<?php
    $host_name="localhost";
    $name="root";
    $password="";
    $db="student";

    $connect=mysqli_connect($host_name,$name,$password,$db);

    if(!$connect)
        die("connection failed!!! again try to connect").mysqli_connect_error();
    
?>