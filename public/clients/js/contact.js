// Generate CAPTCHA
function generateCaptcha() {
    const captchaValue = Math.floor(Math.random() * 9000 + 1000); // Generate random 4-digit number
    document.getElementById('captcha_value').textContent = captchaValue;
    document.getElementById('captcha_input').value = ''; // Clear previous input
}

// Initialize CAPTCHA on page load
document.addEventListener('DOMContentLoaded', generateCaptcha);

// Handle form submission
document.getElementById('contact_form').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = document.getElementById('contact_form');

    // Validate CAPTCHA
    const userCaptcha = document.getElementById('captcha_input').value;
    const correctCaptcha = document.getElementById('captcha_value').textContent;

    if (userCaptcha !== correctCaptcha) {
        swal.fire('Error', 'CAPTCHA validation failed. Please try again.', 'error');
        generateCaptcha(); // Regenerate CAPTCHA
        return;
    }

    // Show spinner and disable button
    const spinner = document.getElementById('button_spinner');
    spinner.classList.remove('d-none');
    const button = document.getElementById('send_message');
    button.textContent = 'Sending...';
    button.disabled = true;

    // Collect form data
    const formData = {
        _token: document.querySelector('input[name="_token"]').value || '',
        fullName: document.getElementById('name').value,
        email: document.getElementById('email').value,
        phoneNumber: document.getElementById('phone').value,
        body: document.getElementById('message').value
    };

    // Send form data via Fetch API
    fetch('/contact/form', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': formData._token
        },
        body: JSON.stringify(formData)
    })
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error('Network response was not ok');
            }
        })
        .then(data => {
            // Reset button state
            spinner.classList.add('d-none');
            button.textContent = 'Send Message';
            button.disabled = false;

            // Show success alert and reset form
            swal.fire('Success', 'Your message has been sent successfully.', 'success');
            form.reset();
            generateCaptcha(); // Regenerate CAPTCHA
        })
        .catch(error => {
            console.error('Error:', error);

            // Reset button state
            spinner.classList.add('d-none');
            button.textContent = 'Send Message';
            button.disabled = false;

            // Show error alert
            swal.fire('Error', 'There was an error sending your message. Please try again.', 'error');
        });
});
