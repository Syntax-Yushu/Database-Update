document.addEventListener("DOMContentLoaded", function () {
    const rooms = [
        {
            pricePerNight: 1500,
            prefix: "deluxe"
        },
        {
            pricePerNight: 2000,
            prefix: "executive"
        }
    ];

    const combinedTotalElem = document.getElementById("combinedTotal");

    function calculateTotal() {
        let total = 0;

        rooms.forEach(({ pricePerNight, prefix }) => {
            const roomQty = document.getElementById(`${prefix}roomQty`);
            const checkinDate = document.getElementById(`${prefix}checkinDate`);
            const checkoutDate = document.getElementById(`${prefix}checkoutDate`);

            if (roomQty && checkinDate && checkoutDate) {
                const checkin = new Date(checkinDate.value);
                const checkout = new Date(checkoutDate.value);

                if (!isNaN(checkin) && !isNaN(checkout) && checkout > checkin) {
                    const nights = (checkout - checkin) / (1000 * 60 * 60 * 24);
                    const qty = parseInt(roomQty.value) || 0;
                    total += nights * qty * pricePerNight;
                }
            }
        });

        combinedTotalElem.textContent = total.toLocaleString() + " Pesos";
    }

    rooms.forEach(({ prefix }) => {
        const roomQty = document.getElementById(`${prefix}roomQty`);
        const checkinDate = document.getElementById(`${prefix}checkinDate`);
        const checkoutDate = document.getElementById(`${prefix}checkoutDate`);
        const checkinTime = document.getElementById(`${prefix}checkinTime`);
        const checkoutTime = document.getElementById(`${prefix}checkoutTime`);

        if (checkinTime) checkinTime.value = "14:00";
        if (checkoutTime) checkoutTime.value = "12:00";

        const today = new Date().toISOString().split("T")[0];
        if (checkinDate) checkinDate.setAttribute("min", today);
        if (checkoutDate) checkoutDate.setAttribute("min", today);

        // Add change listeners to recalculate total
        if (roomQty) roomQty.addEventListener("change", calculateTotal);
        if (checkinDate) checkinDate.addEventListener("change", calculateTotal);
        if (checkoutDate) checkoutDate.addEventListener("change", calculateTotal);
    });
});
