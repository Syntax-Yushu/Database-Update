<?php
// Include database connection
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture Guest Information
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    
    // Insert into Reservations
    $stmt = $conn->prepare("INSERT INTO reservations (reservation_status) VALUES ('Pending')");
    $stmt->execute();
    $reservation_id = $stmt->insert_id;
    $stmt->close();

    // Capture Room Information
    $room_ids = $_POST['room_ids'];
    foreach ($room_ids as $room_id) {
        $stmt = $conn->prepare("UPDATE rooms SET room_status = 'Booked' WHERE room_id = ?");
        $stmt->bind_param("i", $room_id);
        $stmt->execute();
        $stmt->close();
    }

    // Capture Payment Information
    $payment_method = $_POST['payment_method'];
    $stmt = $conn->prepare("INSERT INTO payment (payment_status, payment_method) VALUES ('Pending', ?)");
    $stmt->bind_param("s", $payment_method);
    $stmt->execute();
    $stmt->close();

    echo "<script>alert('Booking Successful!'); window.location.href='confirmation.php';</script>";
}
?>