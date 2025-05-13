const slides = document.querySelectorAll(".slide");
const prev = document.querySelector(".prev");
const next = document.querySelector(".next");
let currentSlide = 0;

// Initialize slider
function showSlide(n) {
    slides.forEach(slide => {
        slide.classList.remove("active");
    });
    
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].classList.add("active");
}

// Next slide
next.addEventListener("click", (e) => {
    e.preventDefault();
    showSlide(currentSlide + 1);
});

// Previous slide
prev.addEventListener("click", (e) => {
    e.preventDefault();
    showSlide(currentSlide - 1);
});

// Auto slide
setInterval(() => {
    showSlide(currentSlide + 1);
}, 4000);

// Show first slide initially
showSlide(0);