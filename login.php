<?php
session_start();
include 'db_connection.php'; // Include the DB connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the SQL query to check if the user exists
    $sql = "SELECT * FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        // Bind the parameter to the SQL query
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Check if user exists
        if ($user = $result->fetch_assoc()) {
            // Password verification
            if (password_verify($password, $user['password'])) {
                // Password is correct
                $_SESSION['user_id'] = $user['user_id'];  // Store user ID in session
                echo "Login successful!";
                
                // Redirect to appropriate page based on user role
                // For now, assuming users do not have a role field, redirect accordingly
                header("Location: booknow.php");
                exit(); // Make sure to exit after header redirect
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "Invalid email or password.";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing query: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
