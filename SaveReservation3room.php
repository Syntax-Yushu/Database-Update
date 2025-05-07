<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['reservation'] = [
        'roomType1' => 'Standard Room',
        'roomQty1' => $_POST['standardroomQty'] ?? 1,
        'numGuests1' => $_POST['standardnumGuests'] ?? '',
        'checkinDate1' => $_POST['standardcheckinDate'] ?? '',
        'checkoutDate1' => $_POST['standardcheckoutDate'] ?? '',
        'services1' => $_POST['services1'] ?? [],

        'roomType2' => 'Deluxe Room',
        'roomQty2' => $_POST['deluxeroomQty'] ?? 1,
        'numGuests2' => $_POST['deluxenumGuests'] ?? '',
        'checkinDate2' => $_POST['deluxecheckinDate'] ?? '',
        'checkoutDate2' => $_POST['deluxecheckoutDate'] ?? '',
        'services2' => $_POST['services2'] ?? [],

        'roomType3' => 'Executive Room',
        'roomQty3' => $_POST['executiveroomQty'] ?? 1,
        'numGuests3' => $_POST['executivenumGuests'] ?? '',
        'checkinDate3' => $_POST['executivecheckinDate'] ?? '',
        'checkoutDate3' => $_POST['executivecheckoutDate'] ?? '',
        'services3' => $_POST['services3'] ?? [],
    ];

    // Redirect to Information3room.php to complete guest details and payment
    header('Location: Information3room.php');
    exit();
} else {
    echo "Invalid access.";
    exit();
}
?>
