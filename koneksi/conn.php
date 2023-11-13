<?php
date_default_timezone_set("Asia/Jakarta");
$servername = "localhost:3325";
$username = "root";
$password = "admin";
$dbname = "db_tiketpesawat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>