let slideIndex = 0;
const slides = document.querySelectorAll('.slide');
const intervalTime = 5000;

function nextSlide() {
  slides[slideIndex].classList.remove('active');
  slideIndex = (slideIndex + 1) % slides.length;
  slides[slideIndex].classList.add('active');
}

setInterval(nextSlide, intervalTime);
