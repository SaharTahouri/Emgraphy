// Show process samples

const process = document.querySelectorAll(".service-process-list li");
const processArrow = document.querySelectorAll(".process svg");
const processSample = document.querySelectorAll(".process-sample");

process.forEach((item, index) => {
    item.addEventListener("click", () => {
        const sample = processSample[index];
        const currentDisplay = window.getComputedStyle(sample, null).display;

        // Close all the elements with animation
        processSample.forEach((element, i) => {
            if (window.getComputedStyle(element, null).display !== "none") {
                // Add the closing styles
                element.classList.add("close");
                element.classList.remove("open");

                // Rotate all arrows downwards
                processArrow[i].style.rotate = "0deg";

                // Hide the element after the animation duration
                setTimeout(() => {
                    element.style.setProperty("display", "none", "important");
                    element.classList.remove("close");
                }, 500); // Timeout matching with animation duration
            }
        });

        // After all are closed, open the clicked sample if it was initially closed
        if (currentDisplay === "none") {
            setTimeout(() => {
                sample.classList.remove("close");
                sample.classList.add("open");
                sample.style.setProperty("display", "flex", "important");

                // Rotate the arrow upwards
                processArrow[index].style.rotate = "180deg";
            }, 500); // Delay this to wait for the closing animations to finish
        }
    });
});