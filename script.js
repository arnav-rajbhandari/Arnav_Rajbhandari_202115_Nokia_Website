function validateName(input) {
    const nameError = document.getElementById('nameError');
    const nameRegex = /^[a-zA-Z]+$/;
    if (!nameRegex.test(input.value)) {
      nameError.textContent = 'Only letters are allowed in the name field.';
    } else {
      nameError.textContent = '';
    }
  }

  function validateEmail(input) {
    const emailError = document.getElementById('emailError');
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(input.value)) {
      emailError.textContent = 'Please enter a valid email address.';
    } else {
      emailError.textContent = '';
    }
  }

  const form = document.getElementById('contactForm');
  form.addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const message = document.getElementById('message');

    if (!name.value || !email.value || !message.value) {
      if (!name.value) {
        validateName(name);
      }
      if (!email.value) {
        validateEmail(email);
      }
      if (!message.value) {
        alert('Please fill out all fields before submitting the form.');
      }
    } else {
      alert('Form submitted successfully!');
    }
  });