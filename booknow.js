document.addEventListener("DOMContentLoaded", function () {
    console.log("JavaScript Loaded!");

    const bookNowButton = document.querySelector(".book-now");

    bookNowButton.addEventListener("click", function () {
        let checkboxes = document.querySelectorAll(".room input[type='checkbox']");
        let selectedRooms = [];

        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                selectedRooms.push(checkbox.value.trim());
            }
        });

        console.log("Selected Rooms:", selectedRooms);

        if (selectedRooms.length === 0) {
            alert("Please select at least one room before booking.");
            return;
        }

        let redirectPage = "";

        if (selectedRooms.length === 1) {
            let selectedRoom = selectedRooms[0];

            if (selectedRoom === "Standard Rooms") {
                redirectPage = "standardreserve.php";
            } else if (selectedRoom === "Deluxe Rooms") {
                redirectPage = "deluxereserve.php";
            } else if (selectedRoom === "Executive Rooms") {
                redirectPage = "executivereserve.php";
            }
        } else if (selectedRooms.length === 2) {
            if (selectedRooms.includes("Standard Rooms") && selectedRooms.includes("Deluxe Rooms")) {
                redirectPage = "StandardDeluxe.php";
            } else if (selectedRooms.includes("Standard Rooms") && selectedRooms.includes("Executive Rooms")) {
                redirectPage = "StandardExecutive.php";
            } else if (selectedRooms.includes("Deluxe Rooms") && selectedRooms.includes("Executive Rooms")) {
                redirectPage = "DeluxeExecutive.php";
            }
        } else {
            alert("Please select only one or two rooms.");
            return;
        }

        if (redirectPage) {
            console.log("Redirecting to: " + redirectPage);
            window.location.href = redirectPage;
        } else {
            console.error("No valid room selection.");
        }
    });
});
