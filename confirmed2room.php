<?php
// Room 1
$roomType1 = $_POST['roomType1'] ?? '';
$roomQty1 = $_POST['roomQty1'] ?? 0;

// Room 2
$roomType2 = $_POST['roomType2'] ?? '';
$roomQty2 = $_POST['roomQty2'] ?? 0;

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

// Pricing
function getRoomPrice($roomType) {
    switch ($roomType) {
        case 'Standard Room': return 1000;
        case 'Deluxe Room': return 1500;
        case 'Executive Room': return 2000;
        default: return 1000;
    }
}

// Calculate total
$total = 0;

// First room calculation
if ($roomQty1 > 0) {
    $price1 = getRoomPrice($roomType1);
    $total += $roomQty1 * $numNights * $price1;
}

// Second room calculation
if ($roomQty2 > 0) {
    $price2 = getRoomPrice($roomType2);
    $total += $roomQty2 * $numNights * $price2;
}

$reservationNumber = str_pad(rand(1, 99999), 5, '0', STR_PAD_LEFT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation</title>
    <link rel="stylesheet" href="confirmed2room.css">
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
            <div class="room-container">
                <div class="room-image">
                    <?php
                    $roomImage1 = '';
                    $roomAlt1 = '';
                    switch ($roomType1) {
                        case 'Standard Room':
                            $roomImage1 = 'images/standard room.png';
                            $roomAlt1 = 'Standard Room';
                            break;
                        case 'Deluxe Room':
                            $roomImage1 = 'images/deluxe.png';
                            $roomAlt1 = 'Deluxe Room';
                            break;
                        case 'Executive Room':
                            $roomImage1 = 'images/executive.png';
                            $roomAlt1 = 'Executive Room';
                            break;
                        default:
                            $roomImage1 = 'images/default.png'; // Fallback image
                            $roomAlt1 = 'Default Room';
                            break;
                    }
                    ?>
                    <img src="<?php echo htmlspecialchars($roomImage1); ?>" alt="<?php echo htmlspecialchars($roomAlt1); ?>">
                </div>
            <div class="room-details">
                <h3>Room 1 Details</h3>
                <p><strong>Room Type:</strong> <?php echo htmlspecialchars($roomType1); ?></p>
                <p><strong>No. of Rooms:</strong> <?php echo htmlspecialchars($roomQty1); ?></p>
                <p><strong>Check-in:</strong> <?php echo htmlspecialchars($checkin); ?> <strong>Time:</strong> 2:00 PM</p>
                <p><strong>Check-out:</strong> <?php echo htmlspecialchars($checkout); ?> <strong>Time:</strong> 12:00 PM</p>
                <p><strong>No. of Nights:</strong> <?php echo htmlspecialchars($numNights); ?></p>
                <p><strong>No. of Guests:</strong> <?php echo htmlspecialchars($numGuests); ?></p>
                <p><strong>Services:</strong> <?php echo $services; ?></p>
                <h2><strong>Total:</strong> <?php echo number_format($total, 2); ?></h2>
            </div>
        </div>

        <div class="room-container">        
            <div class="room-image">
                <?php
                $roomImage2 = '';
                $roomAlt2 = '';
                    switch ($roomType2) {
                        case 'Standard Room':
                            $roomImage2 = 'images/standard room.png';
                            $roomAlt2 = 'Standard Room';
                            break;
                        case 'Deluxe Room':
                            $roomImage2 = 'images/deluxe.png';
                            $roomAlt2 = 'Deluxe Room';
                            break;
                        case 'Executive Room':
                            $roomImage2 = 'images/executive.png';
                            $roomAlt2 = 'Executive Room';
                            break;
                        default:
                            $roomImage2 = 'images/default.png'; // Fallback image
                            $roomAlt2 = 'Default Room';
                            break;
                    }
                    ?>
                <img src="<?php echo htmlspecialchars($roomImage2); ?>" alt="<?php echo htmlspecialchars($roomAlt2); ?>">
            </div>
            <div class="room-details">
                <h3>Room 2 Details</h3>
                <p><strong>Room Type:</strong> <?php echo htmlspecialchars($roomType2); ?></p>
                <p><strong>No. of Rooms:</strong> <?php echo htmlspecialchars($roomQty2); ?></p>
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