document.addEventListener("DOMContentLoaded", function () {
    const roomPricePerNight = 1000;
    const roomQty = document.getElementById("standardroomQty");
    const numGuests = document.getElementById("standardnumGuests");
    const checkinDate = document.getElementById("standardcheckinDate");
    const checkoutDate = document.getElementById("standardcheckoutDate");
    const checkinTime = document.getElementById("standardcheckinTime");
    const checkoutTime = document.getElementById("standardcheckoutTime");
    const totalPrice = document.getElementById("totalPrice");

    // Ensure all elements exist before proceeding
    if (!roomQty || !numGuests || !checkinDate || !checkoutDate || !checkinTime || !checkoutTime || !totalPrice) {
        console.error("One or more elements not found in the document!");
        return;
    }

    // Set default check-in and check-out times
    checkinTime.value = "14:00"; // 2 PM
    checkoutTime.value = "12:00"; // 12 PM

    // Prevent past dates selection
    let today = new Date().toISOString().split("T")[0];
    checkinDate.setAttribute("min", today);
    checkoutDate.setAttribute("min", today);

    // Calculate total cost
    function calculateTotal() {
        let checkin = new Date(checkinDate.value);
        let checkout = new Date(checkoutDate.value);
        
        if (checkout > checkin) {
            let nights = (checkout - checkin) / (1000 * 60 * 60 * 24); // Convert ms to days
            let totalCost = nights * roomPricePerNight * parseInt(roomQty.value);
            totalPrice.textContent = totalCost.toLocaleString() + " Pesos";
        } else {
            totalPrice.textContent = "0.00 Pesos";
        }
    }

    // Listen for changes
    roomQty.addEventListener("change", calculateTotal);
    checkinDate.addEventListener("change", calculateTotal);
    checkoutDate.addEventListener("change", calculateTotal);
});
