<?php
session_start();
include('dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM customers WHERE email = ?";
    
    if ($stmt = $conn->prepare($sql)) {
      
        $stmt->bind_param("s", $email); 

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $customer = $result->fetch_assoc();

            if (password_verify($password, $customer['password'])) {
                $_SESSION['customer_id'] = $customer['id'];
                $_SESSION['customer_email'] = $customer['email'];
                $_SESSION['customer_role'] = $customer['role'];

                // Redirect based on role
                if ($customer['role'] == 'admin') {
                    header("Location: dashboard.php"); // Admin dashboard
                } else {
                    header("Location: booknow.php"); // User booking page
                }
                exit();
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "Invalid email or password.";
        }

        $stmt->close();
    } else {
        echo "Error preparing SQL statement.";
    }
}

$conn->close();
?>
