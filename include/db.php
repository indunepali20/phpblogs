<?php
//database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogs";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}else{
    echo 'connected succesfully';
}

