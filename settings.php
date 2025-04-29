<?php
$servername = "localhost";
$username = "trains";
$password = "--password-goes-here--";
$database = "trains";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

