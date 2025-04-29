<?php
$roomType = $_POST['roomType'] ?? 'Standard Room';
$numRooms = $_POST['roomQty'] ?? 1;
$numGuests = $_POST['numGuests'] ?? '';
$checkin = $_POST['checkinDate'] ?? '';
$checkout = $_POST['checkoutDate'] ?? '';
$services = (isset($_POST['services']) && is_array($_POST['services']) && count($_POST['services']) > 0)
    ? implode(',<br>', array_map('htmlspecialchars', $_POST['services']))
    : 'None';

// Calculate number of nights
$numNights = 1;
if ($checkin && $checkout) {
    $date1 = new DateTime($checkin);
    $date2 = new DateTime($checkout);
    $numNights = max(1, $date1->diff($date2)->days);
}

// Set price based on room type
switch ($roomType) {
    case 'Standard Room':
        $pricePerNight = 1000;
        break;
    case 'Deluxe Room':
        $pricePerNight = 1500;
        break;
    case 'Executive Room':
        $pricePerNight = 2000;
        break;
    default:
    $pricePerNight = 1000; // fallback default prices
        break;
}

// Calculate total
$total = $numRooms * $numNights * $pricePerNight;

$reservationNumber = str_pad(rand(1, 99999), 5, '0', STR_PAD_LEFT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation</title>
    <link rel="stylesheet" href="confirmed.css">
    <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
</head>
<body>
    <div class="logo">
        <a href=""><img src="images/logo2.png" alt="Hotel Logo"></a>
        <button class="rate-button" onclick="goToFeedback()">Rate Now</button>
    </div>

    <div class="container">
        <div class="section-header">
            <h2>HOTEL CHECKOUT FORM</h2>
        </div>
        <div class="confirmation">
            <img src="images/check.png" alt="Success Icon" class="success-icon">
            <h1>Your Hotel Room Booked Successfully!</h1>
        </div>
        <div class="reservation-number">
            <h2>Reservation Number: <?php echo $reservationNumber; ?></h2>        
        </div>
        <div class="content">
        <div class="room-image">
            <?php
            $roomImage = '';
            $roomAlt = '';
                switch ($roomType) {
                    case 'Standard Room':
                        $roomImage = 'images/standard room.png';
                        $roomAlt = 'Standard Room';
                        break;
                    case 'Deluxe Room':
                        $roomImage = 'images/deluxe.png';
                        $roomAlt = 'Deluxe Room';
                        break;
                    case 'Executive Room':
                        $roomImage = 'images/executive.png';
                        $roomAlt = 'Executive Room';
                        break;
                    default:
                        $roomImage = 'images/standar room.png'; // Fallback image
                        $roomAlt = 'Default Room';
                    break;
                }
            ?>
    <img src="<?php echo htmlspecialchars($roomImage); ?>" alt="<?php echo htmlspecialchars($roomAlt); ?>">
</div>
            <div class="room-details">
                <p><strong>Room Type:</strong> <?php echo htmlspecialchars($roomType); ?></p>
                <p><strong>No. of Rooms:</strong> <?php echo htmlspecialchars($numRooms); ?></p>
                <p><strong>Check-in:</strong> <?php echo htmlspecialchars($checkin); ?> <strong>Time:</strong> 2:00 PM</p>
                <p><strong>Check-out:</strong> <?php echo htmlspecialchars($checkout); ?> <strong>Time:</strong> 12:00 PM</p>
                <p><strong>No. of Nights:</strong> <?php echo htmlspecialchars($numNights); ?></p>
                <p><strong>No. of Guests:</strong> <?php echo htmlspecialchars($numGuests); ?></p>
                <p><strong>Services:</strong> <?php echo $services; ?></p>
                <h2><strong>Total:</strong> <?php echo number_format($total, 2); ?></h2>
            </div>
        </div>
    </div>

    <script>
        function goToFeedback() {
            window.location.href = "feedback.php";
        }
    </script>
</body>
</html>