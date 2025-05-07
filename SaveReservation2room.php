<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['reservation'] = [
        'roomType1' => $_POST['roomType1'] ?? 'Standard Room',
        'roomQty1' => $_POST['roomQty1'] ?? 1,
        'roomType2' => $_POST['roomType2'] ?? 'Deluxe Room',
        'roomQty2' => $_POST['roomQty2'] ?? 1,
        'numGuests' => $_POST['numGuests'] ?? '',
        'checkinDate' => $_POST['checkinDate'] ?? '',
        'checkoutDate' => $_POST['checkoutDate'] ?? '',
        'services' => $_POST['services'] ?? [],
    ];

    // Redirect to Information.php to complete guest details and payment
    header('Location: Information2room.php');
    exit();
} else {
    echo "Invalid access.";
    exit();
}
?>
