<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="booknow.css">
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

    <div class="rooms-header">ROOMS</div>

    <main class="room-list">
        <div class="room">
            <input type="checkbox">
            <img src="images/standard room.png" alt="Standard Room">
            <div class="room-info">
                <h2>Standard Rooms</h2>
                <p>A sleek and modern design creates a sense of comfort and style. It includes a king-size bed, a private bathroom, a desk, a small seating area, a TV, an air-conditioning unit, and WiFi.</p>
                <p class="price">1,000 Pesos/ Per Night</p>
                <p>Max Capacity: 2 Adults, 2 Children</p>
                <p>3 rooms available</p>
            </div>
        </div>

        <div class="room">
            <input type="checkbox">
            <img src="images/deluxe.png" alt="Deluxe Room">
            <div class="room-info">
                <h2>Deluxe Rooms</h2>
                <p>Deluxe rooms provide more space and comfort than a standard room, featuring upscale furnishings, a larger bed, premium linens, a well-appointed bathroom, and modern technology.</p>
                <p class="price">1,500 Pesos/ Per Night</p>
                <p>Max Capacity: 2 Adults, 2 Children</p>
                <p>5 rooms available</p>
            </div>
        </div>

        <div class="room">
            <input type="checkbox">
            <img src="images/executive.png" alt="Executive Room">
            <div class="room-info">
                <h2>Executive Rooms</h2>
                <p>Designed for business travelers, offering a spacious layout with a work desk, high-speed WiFi, and premium amenities. It often includes a king-size bed, a seating area, and floor-to-ceiling windows with a business lounge or complimentary breakfast.</p>
                <p class="price">2,000 Pesos/ Per Night</p>
                <p>Max Capacity: 2 Adults, 2 Children</p>
                <p>4 rooms available</p>
            </div>
        </div>

        <button class="book-now">Book Now</button>
    </main>
</body>
</html>