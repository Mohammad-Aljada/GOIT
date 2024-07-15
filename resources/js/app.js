import "./bootstrap";

import Alpine from "alpinejs";


window.Alpine = Alpine;

Alpine.start();


//fade in and out in scroll

function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top <
            (window.innerHeight || document.documentElement.clientHeight) &&
        rect.bottom > 0 &&
        rect.left <
            (window.innerWidth || document.documentElement.clientWidth) &&
        rect.right > 0
    );
}

function checkElementsInView() {
    const elements = document.querySelectorAll(
        "header, section, footer  , main"
    );
    elements.forEach((element) => {
        if (isInViewport(element)) {
            element.classList.add("in-view");
        } else {
            element.classList.remove("in-view");
        }
    });
}

// Initial check when the page loads
window.addEventListener("load", checkElementsInView);

// Event listener for scroll event
window.addEventListener("scroll", checkElementsInView);




