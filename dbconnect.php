<?php
$servername = "localhost"; // Host name
$username = "root";        // MySQL username (default in XAMPP)
$password = "Ashleykyle27";            // MySQL password (empty by default in XAMPP)
$dbname = "hoteldb";       // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
