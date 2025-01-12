// Show message form

const startWork = document.getElementById("start-work");
const orderFormContainer = document.querySelector(".order");
startWork.addEventListener("click", () => {
    document.querySelector(".cta-container").style.setProperty("display", "none", "important");
    orderFormContainer.style.setProperty("display", "flex", "important");
});

// Send message

const responseElement = document.querySelector(".response-holder");

// Function to handle form submission and validation
function handleFormSubmission(event) {
    const form = event.target; // The form that triggered the event
    const action = form.getAttribute("action"); // Get the form action URL
    const senderPhone = form.querySelector("[id$='Phone']"); // Assuming phone field ends with 'Phone'
    const phonePattern = /^[a-zA-Z0-9@_]+$/; // Regex for valid phone input

    // Custom validation for phone field
    if (senderPhone && !phonePattern.test(senderPhone.value)) {
        senderPhone.setCustomValidity("فرمت نامعتبر است. فقط حروف انگلیسی، اعداد، '@' و '_' مجاز هستند.");
    } else {
        senderPhone.setCustomValidity(""); // Clear any previous error
    }

    form.classList.add("was-validated");

    // Prevent submission if form is not valid
    if (!form.checkValidity()) {
        return; // Stop submission if invalid
    }

    const formData = new FormData(form); // Create a FormData object with the form data

    // Perform the fetch request
    fetch(action, {
        method: "POST",
        body: formData
    })
        .then(response => {
            if (response.ok) {
                responseElement.innerHTML = "سفارش شما با موفقیت ثبت شد. منتظر پیغام ما باشید.";
                responseElement.classList.remove("text-danger");
                responseElement.classList.add("text-success");
                form.reset();
                form.classList.remove("was-validated");
            } else {
                responseElement.innerHTML = "سفارش ثبت نشد. لطفاً دوباره تلاش کنید.";
                responseElement.classList.remove("text-success");
                responseElement.classList.add("text-danger");
            }
        })
        .catch(error => {
            console.log(error);
        });
}

// Bind the handleFormSubmission function to all forms
const forms = document.querySelectorAll("form"); // Select all forms

forms.forEach(form => {
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        handleFormSubmission(event); // Call the function for each form submission
    });
});