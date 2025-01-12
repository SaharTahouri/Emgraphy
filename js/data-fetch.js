// Add portfolio masonry items (videos and images)
function loadPortfolioData() {
    fetch("js/data.json")
        .then(response => {
            if (!response.ok) {
                throw new Error("HTTP error " + response.status);
            }
            return response.json();
        })
        .then(data => {
            let portfolio = data.portfolio;
            let portfolioMasonry = document.querySelector(".portfolio-masonry");
            for (i in portfolio) {
                let portfolioItem = portfolio[i];
                let masonryItem = createAppendElement("div", {
                    className: "masonry-item"
                });
                // Create video tags for videos
                if (portfolioItem.endsWith("mp4")) {
                    let videoTag = createAppendElement("video", {
                        className: "video-play-control masonry-video",
                        attributes: {
                            "muted": "",
                            "loop": "",
                            "playsinline": ""
                        }
                    });
                    createAppendElement("source", {
                        attributes: {
                            "data-src": `${portfolioItem}`,
                            "type": "video/mp4"
                        },
                        appendTo: videoTag
                    });
                    masonryItem.append(videoTag);
                    // Create image tags for images
                } else if (portfolioItem.endsWith("jpg") || portfolioItem.endsWith("png")) {
                    createAppendElement("img", {
                        attributes: {
                            "src": `${portfolioItem}`,
                            "loading": "lazy",
                            "alt": "تصویر نمونه کار"
                        },
                        appendTo: masonryItem
                    });
                }
                portfolioMasonry.append(masonryItem);
            }
            // Observe and autoplay
            setupVideoObservers();
        })
        .catch(function (error) {
            console.log("error: ", error);
        });
}

loadPortfolioData();