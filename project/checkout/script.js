function submitCheckout() {

  // Clear errors
  document.getElementById("nameError").innerText = "";
  document.getElementById("emailError").innerText = "";
  document.getElementById("phoneError").innerText = "";

  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let phone = document.getElementById("phone").value.trim();

  let isValid = true;

  // Name validation
  if (name.length < 3) {
    document.getElementById("nameError").innerText = "Name must be at least 3 characters.";
    isValid = false;
  }

  // Email validation
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    document.getElementById("emailError").innerText = "Invalid email format.";
    isValid = false;
  }

  // Phone validation: must be exactly 11 digits
  if (!/^\d{11}$/.test(phone)) {
    document.getElementById("phoneError").innerText = "Phone number must be exactly 11 digits.";
    isValid = false;
  }

  // NO validation for address, city, postal (as requested)

  if (isValid) {
    alert("Order Confirmed!");
  }
}
