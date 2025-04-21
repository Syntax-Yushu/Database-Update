<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <link rel="stylesheet" href="StandardExecutive.css">
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
        <div class="content">
            <div class="room-image">
                <img src="images/executive.png" alt="Executive Room">
            </div>
            <div class="room-details">
                <h2>Executive Rooms</h2>
                <p class="description">
                    Designed for business travelers, offering a spacious layout with a work desk, high-speed Wi-Fi, and premium amenities. It often includes a king-size bed, 
                    a seating area, and access to exclusive services like a business lounge or complimentary breakfast.
                </p>
                <p class="capacity">Max Capacity: 2 Adults, 2 Children</p>
                <p class="price">2,000 Pesos / Per Night</p>

                <div class="input-group">
                    <label>Qty:</label>
                    <select id="executiveroomQty" name="roomQty">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div class="input-group">
                    <label>No. of Guests:</label>
                    <input type="number" min="1" max="4" id="executivenumGuests" name="numGuests">
                </div>

                <div class="checkin-checkout">
                    <div>
                        <label>Check-in</label>
                        <input type="date" id="executivecheckinDate" name="checkinDate">
                    </div>
                    <div>
                        <label>Check-out</label>
                        <input type="date" id="executivecheckoutDate" name="checkoutDate">
                    </div>
                </div>

                <div class="time-selection">
                    <div>
                        <label>Check-in Time:</label>
                        <input type="time" id="executivecheckinTime" readonly>
                    </div>
                    <div>
                        <label>Check-out Time:</label>
                        <input type="time" id="executivecheckoutTime" readonly>
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

    <div class="total-wrapper">
        <div class="total">
            <p>Total: <span id="combinedTotal">0.00 Pesos</span></p>
            <p class="note">The price will vary based on your room service selection.</p>
        </div>
    </div>

 
    <div class="next-button">
        <button onclick="goToNextPage()">→</button>
    </div>
    
    <script>
        function goToNextPage() {
            window.location.href = "Information.php";
        }
    </script>

    <script src="StandardExecutive.js"></script>

</body>
</html>
