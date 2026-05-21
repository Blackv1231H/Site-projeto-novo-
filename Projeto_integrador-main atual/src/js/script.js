const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.next');
const prevButton = document.querySelector('.prev');

let currentIndex = 0;

// Função para mover o carrossel
function moveToSlide(index) {
  track.style.transform = `translateX(-${index * 10}%)`;
}

// Botão próximo
nextButton.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % slides.length;
  moveToSlide(currentIndex);
});

// Botão anterior
prevButton.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  moveToSlide(currentIndex);
});