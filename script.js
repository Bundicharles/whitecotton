let angle = 0;

function rotateCarousel(direction) {
  const carousel = document.getElementById('carousel');
  angle += direction * -72; // 360 / 5 sides = 72deg
  carousel.style.transform = `rotateY(${angle}deg)`;
}
