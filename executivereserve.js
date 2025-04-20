document.addEventListener("DOMContentLoaded", function () {
    const roomPricePerNight = 2000;
    const roomQty = document.getElementById("executiveroomQty");
    const numGuests = document.getElementById("executivenumGuests");
    const checkinDate = document.getElementById("executivecheckinDate");
    const checkoutDate = document.getElementById("executivecheckoutDate");
    const checkinTime = document.getElementById("executivecheckinTime");
    const checkoutTime = document.getElementById("executivecheckoutTime");
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
