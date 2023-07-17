window.addEventListener("DOMContentLoaded", (event) => {
    const navLinks = document.querySelectorAll("nav ul li a");
  
    navLinks.forEach((link) => {
      link.addEventListener("click", (event) => {
        event.preventDefault();
        const targetId = link.getAttribute("href");
        const targetSection = document.querySelector(targetId);
        targetSection.scrollIntoView({ behavior: "smooth" });
      });
    });
  });

  
  var slides = document.getElementsByClassName("slide");
var currentSlide = 0;

function showSlide(index) {
  for (var i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }
  slides[index].classList.add("active");
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}

// Automatically advance to the next slide every 3 seconds
setInterval(nextSlide, 3000);
