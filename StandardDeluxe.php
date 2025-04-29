<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_POST['roomType1'] = 'Standard Room';
    $_POST['roomQty1'] = $_POST['roomQty1'] ?? 1;
    $_POST['roomType2'] = 'Deluxe Room';
    $_POST['roomQty2'] = $_POST['roomQty2'] ?? 1;

    header('Location: confirmed2room.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <link rel="stylesheet" href="StandardDeluxe.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo">
            <a href=""><img src="images/logowithcontact.png" alt="Hotel Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
        </ul>
        <div class="nav-right">
            <img src="images/Notification.png" alt="Notifications" class="notification">
            <img src="images/pic.png" alt="Profile" class="profile">
        </div>
    </nav>

    <div class="section-header">
        <h2>RESERVATION DETAILS</h2>
    </div>

    <div class="container">
        <form action="confirmed2room.php" method="POST">
            <div class="content">
                <div class="room-image">
                    <img src="images/standard room.png" alt="Standard Room">
                </div>
                <div class="room-details">
                    <h2>Standard Rooms</h2>
                <p class="description">
                    A basic hotel room offering essential amenities for a comfortable stay. It typically includes a bed, a private bathroom, a desk or small sitting area, a TV, air conditioning, and free Wi-Fi. Standard rooms are ideal for budget-conscious travelers seeking a simple yet comfortable lodging experience.
                </p>
                <p class="capacity">Max Capacity: 2 Adults, 2 Children</p>
                <p class="price">1,000 Pesos / Per Night</p>

                <input type="hidden" name="roomType1" value="Standard Room">

                <div class="input-group">
                    <label>Qty:</label>
                    <select id="standardroomQty" name="roomQty">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div class="input-group">
                    <label>No. of Guests:</label>
                    <input type="number" min="1" max="4" id="standardnumGuests" name="numGuests">
                </div>

                <div class="checkin-checkout">
                    <div>
                        <label>Check-in</label>
                        <input type="date" id="standardcheckinDate" name="checkinDate">
                    </div>
                    <div>
                        <label>Check-out</label>
                        <input type="date" id="standardcheckoutDate" name="checkoutDate">
                    </div>
                </div>

                <div class="time-selection">
                    <div>
                        <label>Check-in Time:</label>
                        <input type="time" id="standardcheckinTime" readonly>
                    </div>
                    <div>
                        <label>Check-out Time:</label>
                        <input type="time" id="standardcheckoutTime" readonly>
                    </div>
                </div>

                <div class="special-services">
                    <p>Special Services:</p>
                    <input type="checkbox" name="services[]" value="Spa"> Spa <br>
                    <input type="checkbox" name="services[]" value="Airport Transfer"> Airport Transfer <br>
                    <input type="checkbox" name="services[]" value="Room Service"> Room Service <br>
                    <span class="note">(Check as many as you like)</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <form action="confirmed2room.php" method="POST">
            <div class="content">
                <div class="room-image">
                    <img src="images/deluxe.png" alt="Deluxe Room">
                </div>
                <div class="room-details">
                    <h2>Deluxe Rooms</h2>
                <p class="description">
                    We offer more space and comfort than a standard room, featuring upscale furnishings, a larger bed, premium linens, a well-appointed bathroom, and 
                    enhanced amenities like a minibar, coffee maker, and scenic views. Perfect for guests seeking a more luxurious stay.
                </p>
                <p class="capacity">Max Capacity: 2 Adults, 2 Children</p>
                <p class="price">1,500 Pesos / Per Night</p>

                <input type="hidden" name="roomType2" value="Deluxe Room">

                <div class="input-group">
                    <label>Qty:</label>
                    <select id="deluxeroomQty" name="roomQty">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div class="input-group">
                    <label>No. of Guests:</label>
                    <input type="number" min="1" max="4" id="deluxenumGuests" name="numGuests">
                </div>

                <div class="checkin-checkout">
                    <div>
                        <label>Check-in</label>
                        <input type="date" id="deluxecheckinDate" name="checkinDate">
                    </div>
                    <div>
                        <label>Check-out</label>
                        <input type="date" id="deluxecheckoutDate" name="checkoutDate">
                    </div>
                </div>

                <div class="time-selection">
                    <div>
                        <label>Check-in Time:</label>
                        <input type="time" id="deluxecheckinTime" readonly>
                    </div>
                    <div>
                        <label>Check-out Time:</label>
                        <input type="time" id="deluxecheckoutTime" readonly>
                    </div>
                </div>

                <div class="special-services">
                    <p>Special Services:</p>
                    <input type="checkbox" name="services[]" value="Spa"> Spa <br>
                    <input type="checkbox" name="services[]" value="Airport Transfer"> Airport Transfer <br>
                    <input type="checkbox" name="services[]" value="Room Service"> Room Service <br>
                    <span class="note">(Check as many as you like)</span>
                </div>

                <div class="total-wrapper">
                    <div class="total">
                        <p>Total: <span id="combinedTotal">0.00 Pesos</span></p>
                        <p class="note">The price will vary based on your room service selection.</p>
                    </div>
                </div>

                <div class="next-button">
                    <button type="submit">→</button>
                </div>

            </div>
        </div>
    </form> <!-- ✨ FORM ends here -->
</div>
    
    <script>
        function goToNextPage() {
            window.location.href = "Information.php";
        }
    </script>

    <script src="StandardDeluxe.js"></script>

</body>
</html>
