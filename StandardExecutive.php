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
            <h1>Stay Go Hotel</h1>
            <p>09235618831 | <a href="#">Contact Us</a></p>
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
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>

                <div class="input-group">
                    <label>No. of Guests:</label>
                    <input type="number" min="1" max="4">
                </div>

                <div class="checkin-checkout">
                    <div>
                        <label>Check-in</label>
                        <input type="date">
                    </div>
                    <div>
                        <label>Check-out</label>
                        <input type="date">
                    </div>
                </div>

                <div class="time-selection">
                    <div>
                        <label>Check-in Time:</label>
                        <input type="time">
                    </div>
                    <div>
                        <label>Check-out Time:</label>
                        <input type="time">
                    </div>
                </div>

                <div class="special-services">
                    <p>Special Services:</p>
                    <input type="checkbox"> Spa <br>
                    <input type="checkbox"> Airport Transfer <br>
                    <input type="checkbox"> Room Service <br>
                    <span class="note">(Check as many as you like)</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="room-image">
                <img src="images/executive.png" alt="Standard Room">
            </div>
            <div class="room-details">
                <h2>Standard Rooms</h2>
                <p class="description">
                    Designed for business travelers, offering a spacious layout with a work desk, high-speed Wi-Fi, and premium amenities. It often includes a king-size bed, 
a seating area, and access to exclusive services like a business lounge or complimentary breakfast.
                </p>
                <p class="capacity">Max Capacity: 2 Adults, 2 Children</p>
                <p class="price">2,000 Pesos / Per Night</p>

                <div class="input-group">
                    <label>Qty:</label>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>

                <div class="input-group">
                    <label>No. of Guests:</label>
                    <input type="number" min="1" max="4">
                </div>

                <div class="checkin-checkout">
                    <div>
                        <label>Check-in</label>
                        <input type="date">
                    </div>
                    <div>
                        <label>Check-out</label>
                        <input type="date">
                    </div>
                </div>

                <div class="time-selection">
                    <div>
                        <label>Check-in Time:</label>
                        <input type="time">
                    </div>
                    <div>
                        <label>Check-out Time:</label>
                        <input type="time">
                    </div>
                </div>

                <div class="special-services">
                    <p>Special Services:</p>
                    <input type="checkbox"> Spa <br>
                    <input type="checkbox"> Airport Transfer <br>
                    <input type="checkbox"> Room Service <br>
                    <span class="note">(Check as many as you like)</span>
                </div>

                <div class="total">
                    <p>Total: <span class="amount">0.00 Pesos</span></p>
                    <p class="note">The price will vary based on your room service selection.</p>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
