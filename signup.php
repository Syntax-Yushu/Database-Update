<?php
ob_start();
session_start();
include('dbconnect.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim(mysqli_real_escape_string($conn, $_POST['fullname']));
    $email = trim(mysqli_real_escape_string($conn, $_POST['email']));
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match! Please try again.'); window.history.back();</script>";
        exit();
    } 
        $check_sql = "SELECT email FROM customers WHERE email = ?";
    if ($stmt = $conn->prepare($check_sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
    
        if ($stmt->num_rows > 0) {
            echo "<script>alert('Email already registered! Please try again.'); window.history.back();</script>";
            exit();
        }
        $stmt->close();
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO customers (fullname, email, password) VALUES (?, ?, ?)";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sss", $fullname, $email, $hashed_password);
            
            if ($stmt->execute()) {
                echo "<script>
                        alert('Registration successful! You can now log in.');
                        window.location.replace('index.php');
                      </script>";
                exit();
            } else {
                echo "<script>
                        alert('Error inserting data. Please try again.');
                        window.history.back();
                      </script>";
            }
            $stmt->close();
        }
        
}

$conn->close();
ob_end_flush();
?>
