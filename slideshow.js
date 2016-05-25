window.addEventListener("load", startApp)

function startApp() {
    var slide = document.getElementById("slide")
    var counter = 0;
    var forwardButton = document.getElementById("forwardButton")
    var backButton = document.getElementById("backButton")
    var array = ["slideshowplaatje1.jpg",
                 "slideshowplaatje2.jpg",
                 "slideshowplaatje3.jpg",
                 "slideshowplaatje4.jpg"]

    slide.src = array[counter];

    forwardButton.addEventListener("click", goForward)
    backButton.addEventListener("click", goBack)

    setInterval(goForward, 3000)

    function goForward() {
        console.log("ga vooruit");
        counter = counter + 1;
        if (counter > 3) {
            counter = 0;
        }
        slide.src = array[counter];
    }

    function goBack() {
        console.log("ga achteruit");
        counter = counter - 1;
        if (counter > 3) {
            counter = 0;
        }
        slide.src = array[counter];
    }
}