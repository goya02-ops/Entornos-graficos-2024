let slideIndex = 0;
const slides = document.querySelectorAll('.slide');

// Función para mostrar la siguiente diapositiva
function nextSlide() {
    slides[slideIndex].classList.remove('active');
    slideIndex = (slideIndex + 1) % slides.length;
    slides[slideIndex].classList.add('active');
}

// Función para mostrar la diapositiva anterior
function prevSlide() {
    slides[slideIndex].classList.remove('active');
    slideIndex = (slideIndex - 1 + slides.length) % slides.length;
    slides[slideIndex].classList.add('active');
}

// Carrusel automático cada 5 segundos
setInterval(nextSlide, 5000);
