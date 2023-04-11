<div class="slideshow-container">
  <div class="slide">
    <p class="review">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae ante non turpis euismod consectetur sed non ipsum."</p>
    <p class="author">- John Doe</p>
  </div>
  <div class="slide">
    <p class="review">"Vivamus vel ultricies felis. Morbi bibendum tellus vel lectus volutpat, vel lobortis nisi tempor. Nam pretium faucibus turpis, ut tempus metus interdum a."</p>
    <p class="author">- Jane Smith</p>
  </div>
  <div class="slide">
    <p class="review">"Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur ac justo ut massa vestibulum dictum."</p>
    <p class="author">- Bob Johnson</p>
  </div>
  <div class="slide">
    <p class="review">"Nam malesuada fermentum elit, sit amet facilisis urna interdum vel. Aenean vel dui lacus. Nullam eget sapien vitae mi sollicitudin vestibulum."</p>
    <p class="author">- Alice Lee</p>
  </div>
  <div class="slide">
    <p class="review">"Donec rhoncus fringilla diam, vel bibendum arcu tristique non. Aliquam vel leo non odio sagittis volutpat eu in nulla."</p>
    <p class="author">- Tom Williams</p>
  </div>
</div>
<style type="text/css">
  .slideshow-container {
  position: relative;
  height: 200px;
  width: 100%;
  overflow: hidden;
  background-color: whitesmoke;
}
.slide {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: opacity 1s ease-in-out;
}
.slide.active {
  opacity: 1;
}
.review {
  font-size: 27px;
  font-style: italic;
  margin-bottom: 10px;
  text-align: center;
}
.author {
  font-size: 18px;
  font-weight: bold;
  text-align: center;
}
</style>
<script>
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
</script>