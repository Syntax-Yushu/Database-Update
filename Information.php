
<?php include 'Infoconnect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay So Hotel - Booking</title>
    <link rel="stylesheet" href="Information.css">
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

    <form action="Infoconnect.php" method="POST">
        <div class="reservation-details">
            <div class="form-section">
                <h3>Guest Information</h3>
                <div class="form-group">
                    <div class="field">
                        <label>First Name:</label>
                        <input type="text" name="first_name" required>
                    </div>
                    <div class="field">
                        <label>Last Name:</label>
                        <input type="text" name="last_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <label>Address:</label>
                        <input type="text" name="address" required>
                    </div>
                    <div class="field">
                        <label>Contact No.:</label>
                        <input type="text" name="contact_no" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="reservation-details">
            <div class="form-section">
                <h3>Mode of Payment</h3>
                <div class="form-group">
                    <div class="field">
                        <label>Card Type:</label>
                        <select name="payment_method" required>
                            <option value="">Choose your card Type</option>
                            <option value="Credit Card">Credit Card</option>
                            <option value="Debit Card">Debit Card</option>
                            <option value="PayPal">PayPal</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Card Number:</label>
                        <input type="text" name="card_number" required>
                    </div>
                </div>
                <div class="small-fields">
                    <div class="small-field">
                        <label>Year:</label>
                        <input type="text" name="exp_year" required>
                    </div>
                    <div class="small-field">
                        <label>Month:</label>
                        <input type="text" name="exp_month" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <label>Card Name:</label>
                        <input type="text" name="card_name" required>
                    </div>
                    <div class="field">
                        <label>Security Code:</label>
                        <input type="text" name="security_code" required>
                    </div>
                </div>
                <div class="field">
                    <label>Discount:</label>
                    <input type="text" name="discount_code" placeholder="Enter Discount Promo Code">
                    <span class="optional">(Optional)</span>
                </div>
            </div>
            
            <div class="terms">
                <input type="checkbox" required> With this booking I confirm the <a href="#">Terms & Conditions</a> and the <a href="#">Privacy Policy</a>.
            </div>

            <div class="book-now">
                <button type="button" onclick="window.location.href='confirmed.php'">Book Now</button>
            </div>

        </div>
    </form>
</body>
</html>
