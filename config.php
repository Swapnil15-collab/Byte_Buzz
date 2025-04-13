<?php
$servername = "localhost";
$username = "root";  // Change this if your MySQL username is different
$password = "";      // Add your MySQL password if set
$dbname = "user_auth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
