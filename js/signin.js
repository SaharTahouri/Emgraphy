// Get references to elements
const signinForm = document.querySelector(".needs-validation");
const step1 = document.querySelector(".signin-step-1");
const step2 = document.querySelector(".signin-step-2");
const nextBtn = document.getElementById("nextBtn");
const password = document.getElementById("userPassword");
const rePasswordInput = document.getElementById("reUserPassword");

// Handle the Next button click
nextBtn.addEventListener("click", function (event) {
    const firstName = document.getElementById("firstName").value;
    const lastName = document.getElementById("lastName").value;
    const emailInput = document.getElementById("email");
    const email = emailInput.value;

    // Regular expression (regex) for email validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Validate inputs
    if (firstName && lastName && email && emailPattern.test(email)) {
        // Add 'is-valid' class if email matches the pattern
        emailInput.classList.remove("is-invalid");
        emailInput.classList.add("is-valid");

        // Switch to the next step (uses !important for the styles)
        step1.style.setProperty("display", "none", "important");
        step2.style.setProperty("display", "flex", "important");

        // Add a new state to the history
        history.pushState({ step: 2 }, "Step 2");
    } else {
        // Prevent switching to the next step
        event.preventDefault();
        event.stopPropagation();

        // Add 'is-invalid' class if email does not match the pattern
        if (!emailPattern.test(email)) {
            emailInput.classList.add("is-invalid");
            emailInput.classList.remove("is-valid");
        }

        // Check other fields and add validation feedback
        if (!signinForm.checkValidity()) {
            step1.classList.add("was-validated");
        }
    }
});

// Password validation on submit
(() => {
    "use strict";

    signinForm.addEventListener("submit", event => {
        // Get references to password inputs
        const password = document.getElementById("userPassword").value;
        const rePasswordInput = document.getElementById("reUserPassword");
        const rePassword = rePasswordInput.value;

        // Clear any previous custom validation messages
        rePasswordInput.setCustomValidity("");

        // Validate passwords before submitting
        if (!signinForm.checkValidity() || password !== rePassword) {
            event.preventDefault();
            event.stopPropagation();

            // Set a custom validation message if passwords don't match
            if (password !== rePassword) {
                rePasswordInput.setCustomValidity("Passwords do not match");
            }
        }

        signinForm.classList.add("was-validated");
    }, false);
})();

// Handle browser back button
window.addEventListener("popstate", function (event) {
    if (event.state && event.state.step === 2) {
        // If navigating back to Step 2
        step2.style.setProperty("display", "flex", "important"); // Show Step 2
        step1.style.setProperty("display", "none", "important");
    } else {
        // If navigating back to Step 1
        step1.style.setProperty("display", "flex", "important"); // Show Step 1
        step2.style.setProperty("display", "none", "important");
    }
});

// Reset input field validation feedback when the user starts typing
document.querySelectorAll("input").forEach(input => {
    input.addEventListener("input", () => {
        this.classList.remove("is-invalid");
        this.classList.remove("is-valid");
        this.setCustomValidity("");
    });
});