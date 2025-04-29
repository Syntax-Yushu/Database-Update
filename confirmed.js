// Example: Get booking data from localStorage (set this in your reservation page before redirecting)
document.addEventListener('DOMContentLoaded', function () {
    // Get data from localStorage
    const roomType = localStorage.getItem('roomType') || 'Standard Room';
    const numRooms = localStorage.getItem('roomQty') || 1;
    const numGuests = localStorage.getItem('numGuests') || '';
    const checkin = localStorage.getItem('checkinDate') || '';
    const checkout = localStorage.getItem('checkoutDate') || '';
    const services = JSON.parse(localStorage.getItem('services') || '[]');

    // Calculate number of nights
    let numNights = 1;
    if (checkin && checkout) {
        const date1 = new Date(checkin);
        const date2 = new Date(checkout);
        numNights = Math.max(1, Math.round((date2 - date1) / (1000 * 60 * 60 * 24)));
    }

    // Calculate total (example: 1000 per night per room)
    const total = numRooms * numNights * 1000;

    // Display the data in your HTML (update selectors as needed)
    document.getElementById('roomType').textContent = roomType;
    document.getElementById('numRooms').textContent = numRooms;
    document.getElementById('numGuests').textContent = numGuests;
    document.getElementById('checkin').textContent = checkin;
    document.getElementById('checkout').textContent = checkout;
    document.getElementById('numNights').textContent = numNights;
    document.getElementById('services').innerHTML = services.join(',<br>');
    document.getElementById('total').textContent = total.toLocaleString(undefined, {minimumFractionDigits: 2});
});