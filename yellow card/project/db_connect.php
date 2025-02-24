<?php
$servername = "localhost";
$username = "root"; // Change if using a different user
$password = ""; // Change if you have a database password
$dbname = "yellow_card";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
