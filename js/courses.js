// Extract the course ID from the query parameters
function getCourseId() {
    const params = new URLSearchParams(window.location.search); // Parse query parameters
    return params.get("course"); // Retrieve the value of the "course" parameter
}

// Load courses information and data (sessions, files, price)
function loadCourseData() {
    const courseId = getCourseId();
    if (!courseId) {
        console.error("No course ID provided in the URL.");
        return;
    }
    fetch("../js/data.json")
        .then(response => {
            if (!response.ok) {
                throw new Error("HTTP error " + response.status);
            }
            return response.json();
        })
        .then(data => {
            const course = data.courses[courseId];
            let title = document.querySelector(".accordion h2");
            title.innerHTML = course.title;
            // Share Buttons URL Configuration
            // Get current URL
            const courseUrl = window.location.href;
            // Default text to share
            const shareText = title.textContent + " ؛ کاملاً رایگان!";
            // Share on Telegram
            document.getElementById('telegram-share').href = `https://t.me/share/url?url=${encodeURIComponent(courseUrl)}&text=${encodeURIComponent(shareText)}`;
            // Share on WhatsApp
            document.getElementById('whatsapp-share').href = `https://wa.me/?text=${encodeURIComponent(shareText + " " + courseUrl)}`;
            // Share on Instagram
            document.getElementById('instagram-share').href = `https://www.instagram.com/?url=${encodeURIComponent(courseUrl)}&caption=${encodeURIComponent(shareText)}`;
            // Share on Eitaa
            document.getElementById('eitaa-share').href = `https://eitaa.com/share/url?url=${encodeURIComponent(courseUrl)}&caption=${encodeURIComponent(shareText)}`;
            // Share on Bale
            document.getElementById('bale-share').href = `https://web.bale.ai/share/url?url=${encodeURIComponent(courseUrl)}&caption=${encodeURIComponent(shareText)}`;

            let description = document.querySelector(".accordion p");
            description.innerHTML = course.description;
            if (!course) {
                console.error(`Course with ID ${courseId} not found.`);
                return;
            }
            let sessions = course.sessions;
            let accordionList = document.querySelector(".accordion-list");
            for (i in sessions) {
                let session = sessions[i];
                let li = createAppendElement("li", {
                    className: "py-1 px-2 mb-1 rounded-2"
                });
                i++;
                createAppendElement("p", {
                    className: "accordion-item d-flex justify-content-between align-items-center gap-1 m-0",
                    innerHTML: `جلسۀ ${i}<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='#FFF' viewBox='0 0 256 256'><path d='M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z'></path></svg>`,
                    appendTo: li
                });
                let sample = createAppendElement("div", {
                    className: "accordion-sample justify-content-around align-items-center mt-2 mb-1"
                });
                li.append(sample);
                sessionContent(sample, session);
                accordionList.append(li);
                if (document.querySelector(".price-amount"))
                    document.querySelector(".price-amount").innerHTML = course.price;
                i--;
            }
            let attachments = course.attachments;
            if (attachments) {
                for (i in attachments) {
                    let attachment = attachments[i];
                    let li = createAppendElement("li", {
                        className: "py-1 px-2 mb-1 rounded-2"
                    });
                    i++;
                    createAppendElement("p", {
                        className: "accordion-item d-flex justify-content-between align-items-center gap-1 m-0",
                        innerHTML: `فایل ضمیمۀ ${i}<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='#FFF' viewBox='0 0 256 256'><path d='M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z'></path></svg>`,
                        appendTo: li
                    });
                    let sample = createAppendElement("div", {
                        className: "accordion-sample justify-content-around align-items-center mt-2 mb-1"
                    });
                    li.append(sample);
                    attachmentContent(sample, attachment);
                    accordionList.append(li);
                    if (document.querySelector(".price-amount"))
                        document.querySelector(".price-amount").innerHTML = course.price;
                    i--;
                }
            }
            accordionBehavior();
        })
        .catch(function (error) {
            console.log("error: ", error);
        });
}

loadCourseData();