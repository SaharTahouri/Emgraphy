const form = document.getElementById("messageForm");
const action = form.getAttribute("action");
const responseElement = document.querySelector(".response-holder");

form.addEventListener("submit", (event) => {
    event.preventDefault();

    // Check form validity
    if (!form.checkValidity()) {
        event.stopPropagation(); // Prevent submission if invalid
        form.classList.add("was-validated");
        responseElement.innerHTML = "لطفاً تمام فیلدها را پر کنید.";
        responseElement.classList.remove("text-success");
        responseElement.classList.add("text-danger");
        return;
    }

    form.classList.remove("was-validated"); // Remove validation classes for subsequent submissions

    const formData = new FormData(form); // Create a FormData object with the form data

    fetch(action, {
        method: "POST",
        body: formData
    })
        .then(response => {
            if (response.ok) {
                responseElement.innerHTML = "پیام شما با موفقیت ارسال شد.";
                responseElement.classList.remove("text-danger");
                responseElement.classList.add("text-success");
                form.reset(); // Reset the form fields
            } else {
                responseElement.innerHTML = "پیام ارسال نشد. لطفاً دوباره تلاش کنید.";
                responseElement.classList.remove("text-success");
                responseElement.classList.add("text-danger");
            }
            document.getElementById("senderName").value = "";
            document.getElementById("senderSubject").value = "";
            document.getElementById("senderMessage").value = "";
        })
        .catch(error => {
            console.log(error);
            responseElement.innerHTML = "خطایی رخ داده است. لطفاً دوباره تلاش کنید.";
            responseElement.classList.remove("text-success");
            responseElement.classList.add("text-danger");
        });
});