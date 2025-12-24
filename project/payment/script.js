function selectPayment(type){
    let box = document.getElementById("paymentFields");

    if(type === 'Card'){
        box.innerHTML = `
            <div class='section'>
                <label>Card Number</label>
                <input class='inputBox' placeholder='xxxx xxxx xxxx xxxx'>

                <label>Expiry Date</label>
                <input class='inputBox' placeholder='MM/YY'>

                <label>CVV</label>
                <input class='inputBox' placeholder='123'>
            </div>
        `;
    }

    if(type === 'Bkash'){
        box.innerHTML = `
            <div class='section'>
                <label>bKash Number</label>
                <input class='inputBox' placeholder='01XXXXXXXXX'>
            </div>
        `;
    }

    if(type === 'Nagad'){
        box.innerHTML = `
            <div class='section'>
                <label>Nagad Number</label>
                <input class='inputBox' placeholder='01XXXXXXXXX'>
            </div>
        `;
    }
}

function confirmPayment(){
    // Clear previous errors
    document.getElementById("nameError").innerText = "";
    document.getElementById("phoneError").innerText = "";
    document.getElementById("emailError").innerText = "";

    let name = document.getElementById("name").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let email = document.getElementById("email").value.trim();

    let isValid = true;

    // Name validation
    if (name.length < 3) {
        document.getElementById("nameError").innerText = "Name must be at least 3 characters.";
        isValid = false;
    }

    // Phone validation (11 digits)
    if (!/^\d{11}$/.test(phone)) {
        document.getElementById("phoneError").innerText = "Phone number must be exactly 11 digits.";
        isValid = false;
    }

    // Email validation (optional but must be valid if typed)
    if (email.length > 0) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            document.getElementById("emailError").innerText = "Invalid email format.";
            isValid = false;
        }
    }

    if (isValid) {
        alert("Payment Successful! Your order is confirmed.");
    }
}
