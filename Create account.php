<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Stay Go Hotel</title>
    <link rel="stylesheet" href="Index.css">
</head>
<body>
    <div id="signupmodal" class="modal">
        <div class="modal-content login-box">
            <h2>Create an Account</h2>
            <form id="signup-form">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required> 

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your Email" required> 

                <label for="password">Password:</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                    <span class="toggle-password">👁️</span>
                </div>

                <label for="confirm-password">Confirm Password:</label>
                <div class="password-container">
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your Password" required>
                    <span class="toggle-password">👁️</span>
                </div>

                <button id="signupbutton">SIGN UP</button>

                <p class="continue-with">Or Sign Up with...</p>
                <button class="google-login">
                    <img src="images/google.png" alt="Google Logo"> Google
                </button>
            </form>
            <p class="signup-link">Already have an account? <a href="login.html">Login</a></p>
        </div>
    </div>
</body>
</html>
