document.addEventListener('DOMContentLoaded', function () {
    // Get data from localStorage
    const roomType1 = localStorage.getItem('roomType1') || 'Standard Room';
    const roomQty1 = parseInt(localStorage.getItem('roomQty1') || '1', 10);
    const roomType2 = localStorage.getItem('roomType2') || 'Deluxe Room';
    const roomQty2 = parseInt(localStorage.getItem('roomQty2') || '1', 10);
    const roomType3 = localStorage.getItem('roomType3') || 'Executive Room';
    const roomQty3 = parseInt(localStorage.getItem('roomQty3') || '1', 10);
    const numGuests = localStorage.getItem('numGuests') || '1';
    const checkin = localStorage.getItem('checkinDate') || '';
    const checkout = localStorage.getItem('checkoutDate') || '';
    const services1 = JSON.parse(localStorage.getItem('services1') || '[]');
    const services2 = JSON.parse(localStorage.getItem('services2') || '[]');
    const services3 = JSON.parse(localStorage.getItem('services3') || '[]');

    // Debugging: Verify localStorage data
    console.log('roomType1:', roomType1);
    console.log('roomQty1:', roomQty1);
    console.log('roomType2:', roomType2);
    console.log('roomQty2:', roomQty2);
    console.log('roomType3:', roomType3);
    console.log('roomQty3:', roomQty3);
    console.log('checkinDate:', checkin);
    console.log('checkoutDate:', checkout);
    console.log('services1:', services1);
    console.log('services2:', services2);
    console.log('services3:', services3);

    // Calculate number of nights
    let numNights = 1;
    if (checkin && checkout) {
        const date1 = new Date(checkin);
        const date2 = new Date(checkout);
        numNights = Math.max(1, Math.round((date2 - date1) / (1000 * 60 * 60 * 24)));
    }
    console.log('Number of Nights:', numNights);

    // Set prices based on room types
    const getPricePerNight = (roomType) => {
        switch (roomType) {
            case 'Standard Room':
                return 1000;
            case 'Deluxe Room':
                return 1500;
            case 'Executive Room':
                return 2000;
            default:
                return 1000; // Default price
        }
    };

    const pricePerNight1 = getPricePerNight(roomType1);
    const pricePerNight2 = getPricePerNight(roomType2);
    const pricePerNight3 = getPricePerNight(roomType3);

    // Calculate total for all rooms
    const total1 = roomQty1 * numNights * pricePerNight1;
    const total2 = roomQty2 * numNights * pricePerNight2;
    const total3 = roomQty3 * numNights * pricePerNight3;
    const total = total1 + total2 + total3;

    // Debugging: Verify calculations
    console.log('Price per Night (Room 1):', pricePerNight1);
    console.log('Price per Night (Room 2):', pricePerNight2);
    console.log('Price per Night (Room 3):', pricePerNight3);
    console.log('Total for Room 1:', total1);
    console.log('Total for Room 2:', total2);
    console.log('Total for Room 3:', total3);
    console.log('Grand Total:', total);

    // Display the data in your HTML (update selectors as needed)
    document.getElementById('roomType1').textContent = roomType1;
    document.getElementById('roomQty1').textContent = roomQty1;
    document.getElementById('roomType2').textContent = roomType2;
    document.getElementById('roomQty2').textContent = roomQty2;
    document.getElementById('roomType3').textContent = roomType3;
    document.getElementById('roomQty3').textContent = roomQty3;
    document.getElementById('numGuests').textContent = numGuests;
    document.getElementById('checkin').textContent = checkin;
    document.getElementById('checkout').textContent = checkout;
    document.getElementById('numNights').textContent = numNights;
    document.getElementById('services1').innerHTML = services1.join(',<br>');
    document.getElementById('services2').innerHTML = services2.join(',<br>');
    document.getElementById('services3').innerHTML = services3.join(',<br>');
    document.getElementById('total').textContent = total.toLocaleString(undefined, { minimumFractionDigits: 2 });
});
