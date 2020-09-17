<?php

$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("connection failed". mysqli_error());
}
mysqli_select_db($con, 'geet');
$uploaded = false;

?>