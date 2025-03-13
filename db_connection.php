<?php
// db_connection.php
try {
    // Create or open SQLite database file
    $db = new PDO('sqlite:/path/to/your/hotel.db');
    // Set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
