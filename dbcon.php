<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tennisclub";
$port = 3307;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
    
}