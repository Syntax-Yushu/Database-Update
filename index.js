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
                event.preventDefault();
                document.getElementById("password-error").style.display = "block";
            }
        };
document.getElementById("signup-form").addEventListener("submit", function (event) {
    let password = document.getElementById("signup-password").value;
    let confirmPassword = document.getElementById("confirm-password").value;
            
        if (password !== confirmPassword) {
            event.preventDefault();
            document.getElementById("password-error").style.display = "block";
        }
});       

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