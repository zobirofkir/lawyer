// Get the modal
var modal = document.getElementById("modal");

// Get the button that opens the modal
var btn = document.getElementById("appointmentBtn");

// Get the <span> element that closes the modal
var span = document.querySelector(".close");

// When the user clicks the button, open the modal
btn.addEventListener("click", function() {
    modal.style.display = "block";
});

// When the user clicks on <span> (x), close the modal
span.addEventListener("click", function() {
    modal.style.display = "none";
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});

// Form submission
var form = document.getElementById("appointmentForm");

form.addEventListener("submit", function(event) {
    event.preventDefault();

    // Extract form data
    var formData = new FormData(form);

    // Create an XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Define what happens on successful data submission
    xhr.onload = function() {
        // Check if the request was successful (status code 200)
        if (xhr.status === 200) {
            // Display a success message or perform any other action
            console.log("Email sent successfully!");
        } else {
            // Display an error message or perform any other action
            console.error("Error sending email:", xhr.statusText);
        }
    };

    // Define what happens in case of an error
    xhr.onerror = function() {
        // Display an error message or perform any other action
        console.error("Error sending email.");
    };

    // Open a POST request to your Laravel route for email sending
    xhr.open("POST", "{{ url('/') }}", true);

    // Set the Content-Type header to multipart/form-data
    xhr.setRequestHeader("Content-Type", "multipart/form-data");

    // Send the form data
    xhr.send(formData);

    // After form submission, you can close the modal
    modal.style.display = "none";
});
