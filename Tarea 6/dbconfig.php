<?php


$host = "localhost";
$user = "root";
$password = "admin";
$dbname = "serie_db";

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully";
}
