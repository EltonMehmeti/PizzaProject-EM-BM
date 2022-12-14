"use strict";
var slideIndex = 0;
var slides = document.getElementsByClassName("slide");

// Function to show next slide
function showNextSlide() {
  // Hide current slide
  slides[slideIndex].style.left = "100%";

  // Increment slide index
  slideIndex++;

  // Reset slide index if at end of slides
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }

  // Show next slide
  slides[slideIndex].style.left = "0";
}

// Show next slide every 3 seconds
setInterval(showNextSlide, 3000);
