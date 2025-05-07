<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['reservation'] = [
        'roomType' => $_POST['roomType'],
        'roomQty' => $_POST['roomQty'],
        'numGuests' => $_POST['numGuests'],
        'checkinDate' => $_POST['checkinDate'],
        'checkoutDate' => $_POST['checkoutDate'],
        'services' => $_POST['services'] ?? [],
    ];

    // Redirect to Information form (not confirmed)
    header('Location: Information.php');
    exit();
} else {
    echo "Invalid access.";
    exit();
}
?>
