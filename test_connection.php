<?php
$plain_password = '123456'; // The password you're entering in the login form
$hashed_password_from_db = '$2y$10$79fn3/hnogOh5HFqIVymJefSVAdAuD3Ci0dYYx5xsMTyxghwbYdQ.'; // Copy from your database

if (password_verify($plain_password, $hashed_password_from_db)) {
    echo "Password matches!";
} else {
    echo "Password does NOT match!";
}
?>
