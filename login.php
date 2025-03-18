<?php
session_start();
include('dbconnect.php'); 

$admin_email = "admin@gmail.com";
$admin_password = password_hash("admin123", PASSWORD_DEFAULT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim(mysqli_real_escape_string($conn, $_POST['email']));
    $password = trim($_POST['password']);

    if ($email === $admin_email && password_verify($password, $admin_password)) {
        $_SESSION['user_id'] = 0;
        $_SESSION['fullname'] = "Administrator";
        $_SESSION['role'] = "admin";
        
        echo "<script>
                alert('Admin login successful!');
                window.location.replace('dashboard.php');
              </script>";
        exit();
    }

    $sql = "SELECT customer_id, fullname, password FROM customers WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($customer_id, $fullname, $hashed_password);
            $stmt->fetch();
            
            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $customer_id;
                $_SESSION['fullname'] = $fullname;
                $_SESSION['role'] = "user";
                
                echo "<script>
                        alert('Login successful!');
                        window.location.replace('booknow.php');
                      </script>";
                exit();
            } else {
                echo "<script>alert('Invalid password! Please try again.'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('No account found with that email!'); window.history.back();</script>";
        }
        $stmt->close();
    }
}

$conn->close();
?>
