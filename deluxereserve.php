<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <link rel="stylesheet" href="deluxe.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <a href=""><img src="images/logowithcontact.png" alt="Hotel Logo"></a>
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Settings</a>
            <a href="#">About Us</a>
            <a href="#">Services</a>
            <img src="images/Notification.png" alt="Notifications" class="icon">
            <img src="images/pic.png" alt="User Avatar" class="avatar">
        </nav>
    </header>
    
    <div class="section-header">
        <h2>RESERVATION DETAILS</h2>
    </div>

    <div class="container">
        <div class="content">
            <div class="room-image">
                <img src="images/deluxe.png" alt="Standard Room">
            </div>
            <div class="room-details">
                <h2>Standard Rooms</h2>
                <p class="description">
                    We offers more space and comfort than a standard room, featuring upscale furnishings, a larger bed, premium linens, a well-appointed bathroom, and 
enhanced amenities like a minibar, coffee maker, and scenic views. Perfect for guests seeking a more luxurious stay.
                </p>
                <p class="capacity">Max Capacity: 2 Adults, 2 Children</p>
                <p class="price">1,500 Pesos / Per Night</p>

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
