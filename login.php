<?php
session_start();
include 'db_connection.php'; // Include the DB connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the SQL query to check if the user exists
    $query = $db->prepare("SELECT * FROM users WHERE email = :email");
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();

    // Check if the user exists
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Password is correct
        $_SESSION['user_id'] = $user['id'];  // Store user ID in session
        echo "Login successful!";
        // Redirect to the appropriate page based on role
        if ($user['role'] == 'admin') {
            header("Location: dashboard.php");
        } else {
            header("Location: booknow.php");
        }
    } else {
        echo "Invalid email or password.";
    }
}
?>
