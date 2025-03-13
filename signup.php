<?php
// Make sure to include your database connection file
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit();
    }

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL query
    $query = $db->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
    $query->bindParam(':name', $name);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $hashedPassword);

    // Execute the query
    if ($query->execute()) {
        echo "Sign-up successful!";
    } else {
        echo "Error: Could not save the user data.";
    }
}
?>
