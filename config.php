<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="tutorial";

$con=mysqli_connect($servername,$username,$password,$database);

if(!$con) {
    die("connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";