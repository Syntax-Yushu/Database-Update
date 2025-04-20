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
            <h2>Reservation Number: 00143</h2>
        </div>
        <div class="content">
            <div class="room-image">
                <img src="images/executive.png" alt="Executive Room">
            </div>
            <div class="room-details">
                <p><strong>Room Type:</strong> Standard Room No. 524</p>
                <p><strong>No. of Rooms:</strong> 1</p>
                <p><strong>Check-in:</strong> May 1, 2025 <strong>Time:</strong> 1:00 PM</p>
                <p><strong>Check-out:</strong> May 6, 2025 <strong>Time:</strong> 1:00 PM</p>
                <p><strong>No. of Nights:</strong> 5</p>
                <p><strong>No. of Guests:</strong> 2 Adults, 2 Children</p>
                <p><strong>Services:</strong> Spa, <br><span class="indented">Room Service</span></p>
                <h2><strong>Total:</strong> 5,000.00</h2>
            </div>
        </div>
    </div>

    <script>
        function goToFeedback() {
            window.location.href = "feedback.html";
        }
    </script>
</body>
</html>