var slideIndex = 0;
var slides = document.getElementsByClassName("slide");

function showSlides() {
  for (var i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].classList.add("active");
  setTimeout(showSlides, 8000); // Change image every 5 seconds
}

showSlides();