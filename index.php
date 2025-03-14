<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation</title>
    <link rel="stylesheet" href="Index.css">
    <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
</head>
<body>
    <div class="top-bar">
            <h2 id="logo">Stay Go Hotel</h2>
            <p>09235618931|Contact Us</p>
    </div>
    <div class="menu">
        <table>
            <tr>
                
                <th><a href="#" onclick="openModal('aboutmodal')">ABOUT US</a></th>
                <th><a href="#" onclick="openModal('servicesmodal')">SERVICES</a></th>
                <th><a href="#" onclick="openModal('loginmodal')">LOGIN</a></th>
            </tr>
        </table>
    </div>
    <h1 id="motto">Where every stay feels special.</h1>
    <button id="booknow">Book Now </button>
    <div id="aboutmodal" class="modal">
        <div class="modal-content">
        <span class="close" onclick="closeModal('aboutmodal')">&times;</span>
        <p id = "intro">
            Welcome to Stay Go Hotel, where luxury meets comfort in the heart of Cebu City. 
            Whether you’re traveling for business or leisure, we provide a world-class hospitality 
            experience tailored to your needs. At Stay Go Hotel, we take pride in offering elegant accommodations,
            exceptional dining, and outstanding service. Our well-appointed rooms and suites are designed for 
            relaxation, featuring modern amenities, plush bedding, and breathtaking views. 
            Indulge in our signature restaurant’s exquisite cuisine, unwind at our spa, 
            or take a dip in our scenic pool. Our dedicated team ensures a seamless stay, 
            offering personalized services to make your visit truly unforgettable. 
            We are the perfect destination for travelers 
            looking to explore the vibrant city while enjoying a peaceful retreat. 
            Experience hospitality at its finest at Stay Go Hotel—where every stay is a memorable journey.
        </p>
        </div>
    </div>
    <div id="servicesmodal" class="modal">
        <div class="modal-content">
        <span class="close" onclick="closeModal('servicesmodal')">&times;</span>
        <h2>SERVICES</h2>
        <P>
            At Stay Go Hotel, we are committed to providing a seamless and unforgettable 
            experience with our top-tier services and amenities:
        </p>
        <h3>Accomodation</h3>
            <ul>
                <li>Luxurious rooms and suites with modern décor</li>
                <li>Complimentary high-speed Wi-Fi</li>
                <li>24/7 room service</li>
                <li>Daily housekeeping and turndown service</li>
            </ul>
        <h3>Wellness & Recreation<h3>
            <ul>
                <li>Full-service spa and wellness center</li>
                <li>Outdoor/Indoor swimming pool</li>
                <li>State-of-the-art fitness center</li>
                <li>Yoga and meditation sessions</li>
            </ul>
        </div>
    </div>
    <div id="loginmodal" class="modal">
        <div class="modal-content login-box">
            <span class="close" onclick="closeModal('loginmodal')">&times;</span>
            <h2>Welcome!!</h2>
            <form id="login-form" action="login.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your Email" required> 
                
                <label for="password">Password:</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                    <span class="toggle-password">👁️</span>
                </div>
                
                <a href="#" class="forgot-password">Forgot Password?</a>
                <button id="loginbutton">LOGIN</button>
                
                <p class="continue-with">Or Continue with...</p>
                <button class="google-login">
                    <img src="images/google.png" alt="Google Logo"> Google
                </button>
            </form>
            <p class="signup-link">Don't have an account? <a href="#">Sign Up</a></p>
        </div>
    </div>

    <div id="signupmodal" class="modal">
        <div class="modal-content login-box">
            <span class="close" onclick="closeModal('signupmodal')">&times;</span>
            <h2>Create an Account</h2>
            <form method="post" action="signup.php" id="signup-form">

                <label for="signup-name">Full Name:</label>
                <input type="text" id="signup-name" name="fullname" placeholder="Enter your Name" required>

                <label for="signup-email">Email:</label>
                <input type="email" id="signup-email" name="email" placeholder="Enter your Email" required>

                <label for="signup-password">Password:</label>
                <div class="password-container">
                    <input type="password" id="signup-password" name="password" placeholder="Enter your Password"
                        required>
                    <span class="toggle-password" onclick="togglePassword('signup-password')">👁️</span>
                </div>

                <label for="confirm-password">Confirm Password:</label>
                <div class="password-container">
                    <input type="password" id="confirm-password" name="confirm_password"
                        placeholder="Confirm your Password" required>
                    <span class="toggle-password" onclick="togglePassword('confirm-password')">👁️</span>
                </div>

                <p id="password-error" style="color: red; display: none;">Passwords do not match!</p>

                <button type="submit" id="signupbutton">SIGN UP</button>
            </form>

            <p class="continue-with">Or Sign up with...</p>
            <button class="google-login">
                <img src="images/google.png" alt="Google Logo"> Google
            </button>

            <p class="signup-link">Already have an account? <a href="#" onclick="switchToLogin()">Login</a></p>
        </div>
    </div>
    
    
    <script>
 function openModal(id) {
    let modals = document.getElementsByClassName("modal");
    for (let modal of modals) {
        modal.style.display = "none";
    }
    document.getElementById(id).style.display = "flex";
}

function closeModal(id) {
    document.getElementById(id).style.display = "none";
}

function togglePassword(inputId) {
            const passwordField = document.getElementById(inputId);
            if (passwordField.type === "password") {
                passwordField.type = "text";
                 
            } else {
                passwordField.type = "password";
                eyeIcon.innerHTML = "👁️";
            }
        }   

document.querySelector(".signup-link a").addEventListener("click", function(event) {
    event.preventDefault();
    closeModal("loginmodal");
    openModal("signupmodal");
});

function switchToLogin() {
    closeModal("signupmodal");
    openModal("loginmodal");
}

window.onclick = function(event) {
    let modals = document.getElementsByClassName("modal");
    for (let modal of modals) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
};

document.getElementById("signup-form").onsubmit = function(event) {
            var password = document.getElementById("signup-password").value;
            var confirmPassword = document.getElementById("confirm-password").value;

            if (password !== confirmPassword) {
                event.preventDefault(); // Prevent form submission
                document.getElementById("password-error").style.display = "block"; // Show error message
            }
        };

document.getElementById("booknow").addEventListener("click", function () {
    openModal("loginmodal");
});

function isUserLoggedIn() {
    return localStorage.getItem("isLoggedIn") === "true";
}

function getUserRole() {
    return localStorage.getItem("userRole"); 
}

document.getElementById("booknow").addEventListener("click", function () {
           openModal("loginmodal"); 
    }
);

document.getElementById("loginbutton").addEventListener("click", function(event) {
    event.preventDefault(); 

    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();
    
    if (email === "admin@gmail.com" && password === "admin123") {
        alert("Admin Login successful!");
        localStorage.setItem("isLoggedIn", "true");
        localStorage.setItem("userRole", "admin"); 
        closeModal("loginmodal");
        window.location.href = "dashboard.php"; 

    } else if (email === "user@gmail.com" && password === "user123") {
        alert("User Login successful!");
        localStorage.setItem("isLoggedIn", "true");
        localStorage.setItem("userRole", "user");
        closeModal("loginmodal");
        window.location.href = "booknow.php"; 

        if (sessionStorage.getItem("redirectToBookNow") === "true") {
            sessionStorage.removeItem("redirectToBookNow");
            window.location.href = "booknow.php"; 
        } else {
            window.location.href = "booknow.php"; 
        }
    } else {
        alert("Invalid email or password. Please try again.");
    }
});

    </script>
</body>
<footer>
    <div class="pic">
        <img src="elnetpics/bangko.png" id="image1" alt="lobby">
        <img src="elnetpics/pool.webp" id="image2" alt="pool">
        <img src="elnetpics/spa2.webp" id="image3" alt="spa">
    </div>
</footer>
</html>