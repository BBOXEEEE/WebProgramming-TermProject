const html = document.querySelector("html");
const body = document.querySelector("body");
const navWrap = document.querySelector(".navWrap");
const navBackground = document.querySelector(".navBackground");
const toggleBtn = document.querySelector(".toggleBtn");

if (toggleBtn) {
    toggleBtn.addEventListener("click", () => {
        navWrap.classList.toggle("active");
        html.classList.toggle("active");
        body.classList.toggle("active");
    });
}

if (navBackground) {
    navBackground.addEventListener("click", () => {
        navWrap.classList.toggle("active");
        html.classList.toggle("active");
        body.classList.toggle("active");
    });
}