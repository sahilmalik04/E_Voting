<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "e-voting";
$conn = new mysqli($servername, $username , $password, $database);

if ($conn->connect_error){
    die("connection failed: ".$conn->connect_eror);
}

?>