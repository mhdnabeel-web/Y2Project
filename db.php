<?php
$host = "localhost"; // For XAMPP, use 'localhost'
$username = "root"; // Default MySQL user for XAMPP
$password = ""; // Default is empty
$database = "signup_eventmanagement"; // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
