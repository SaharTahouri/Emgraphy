// Create elements, add classes, append elements functions

function createAppendElement(type, options = {}) {
    let element = document.createElement(type);

    if (options.className) {
        element.className = options.className;
    }

    if (options.id) {
        element.id = options.id;
    }

    if (options.attributes) {
        for (let attribute in options.attributes) {
            element.setAttribute(attribute, options.attributes[attribute]);
        }
    }

    if (options.styles) {
        for (let styleAtt in options.styles) {
            element.style[styleAtt] = options.styles[styleAtt];
        }
    }

    if (options.textContent) {
        element.textContent = options.textContent;
    }

    if (options.innerHTML) {
        element.innerHTML = options.innerHTML;
    }

    if (options.appendTo) {
        options.appendTo.append(element);
    }

    return element;
}

// dropdown activation

const dropdownElementList = document.querySelectorAll(".dropdown-toggle");
const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl));

// navbar active class handling

// Get all the sections
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".nav-link");

// Handle active class for single-page navigation (scroll detection)
window.addEventListener("scroll", () => {
    let currentSection = "";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop - 300; // Adjust for navbar height
        const sectionHeight = section.offsetHeight;

        if (
            window.scrollY >= sectionTop &&
            window.scrollY < sectionTop + sectionHeight
        ) {
            currentSection = section.getAttribute("data-scroll-id");
        }
    });

    // Update the active link based on the current section
    if (currentSection) {
        updateActiveLink(currentSection);
    }
});

// Update the active link
function updateActiveLink(currentSection) {
    navLinks.forEach((link) => {
        link.classList.remove("active");
        if (link.getAttribute("href").includes(currentSection)) {
            link.classList.add("active");
        }
    });
}

// Immediate feedback on click
navLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
        navLinks.forEach((l) => l.classList.remove("active"));
        event.currentTarget.classList.add("active");
    });
});

// Auto play video on sight
function setupVideoObservers() {
    const videos = document.querySelectorAll(".video-play-control");

    // Set up the IntersectionObserver to monitor visibility
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const video = entry.target;  // Get the video element
            const source = video.querySelector("source");
            if (entry.isIntersecting) {
                video.muted = true;
                if (!source.src) {
                    source.src = source.getAttribute("data-src");
                    video.load();  // Load the video
                }
                // Play the video when it becomes visible
                video.play().catch(error => {
                    // Handle promise rejections (such as the AbortError)
                    console.log("Play interrupted: ", error);
                });
            } else {
                // Pause the video when it goes out of view
                video.pause();
            }
        });
    }, { threshold: .5 });

    // Observe the video elements
    videos.forEach(video => {
        observer.observe(video);
    });
}

setupVideoObservers();

// scroll top button
let goTopBtn = document.getElementById("gotop");

window.onscroll = function () { showGoTopBtn() };

function showGoTopBtn() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        goTopBtn.classList.add("show-gotop");
    } else {
        goTopBtn.classList.remove("show-gotop");
    }
}

goTopBtn.addEventListener("click", () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});