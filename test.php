<?php
$servername = "localhost";
$username = "michelleAdmin";
$password = "!@QWERFD78947894";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
