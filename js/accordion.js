// Show accordion samples

function accordionBehavior() {
    const accordion = document.querySelectorAll(".accordion-list li");
    const accordionArrow = document.querySelectorAll(".accordion-item svg");
    const accordionSample = document.querySelectorAll(".accordion-sample");
    document.querySelectorAll(".accordion-sample video").muted = true;
    accordion.forEach((item, index) => {
        item.addEventListener("click", () => {
            const sample = accordionSample[index];
            const currentDisplay = window.getComputedStyle(sample, null).display;

            // Close all the elements with animation
            accordionSample.forEach((element, i) => {
                if (window.getComputedStyle(element, null).display !== "none") {
                    // Add the closing styles
                    element.classList.add("close");
                    element.classList.remove("open");

                    // Rotate all arrows downwards
                    accordionArrow[i].style.rotate = "0deg";

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
                    accordionArrow[index].style.rotate = "180deg";
                }, 500); // Delay this to wait for the closing animations to finish
            }
        });
    });
}