<?php
//this tells php where to look and connect with MySQL
$host = "localhost";
$username ="root";
$password ="LCAsqlPASSWORD97";
$database = "techvibe";
$port = 3307;

//now for the connection with MySQL
$conn = new mysqli($host, $username, $password, $database, $port);

//check for errors in connection
if ($conn->connect_error){
  die("connection failed: " . $conn->connect_error);
}

?>
