let indices = {};


function getVisibleImages() {
    const width = window.innerWidth;
    if (width >= 900) return 3;
    if (width >= 600) return 2; 
    return 1;                   
}

function moverCarrusel(direction, carouselId) {
    if (!(carouselId in indices)) {
        indices[carouselId] = 0;
    }

    const carousel = document.getElementById(carouselId);
    const totalImages = carousel.children.length;
    const visibleImages = getVisibleImages();
    const maxIndex = totalImages - visibleImages;

    indices[carouselId] += direction;

    if (indices[carouselId] < 0) {
        indices[carouselId] = maxIndex;
    } else if (indices[carouselId] > maxIndex) {
        indices[carouselId] = 0;
    }

    const offset = -(indices[carouselId] * (100 / visibleImages));
    carousel.style.transform = `translateX(${offset}%)`;
}

let sliderIndex = 0;
function autoSlide() {
    const slider = document.getElementById('slider');
    const totalSlides = slider.children.length;

    sliderIndex++;
    if (sliderIndex >= totalSlides) {
        sliderIndex = 0;
    }

    const offset = -(sliderIndex * 100);
    slider.style.transform = `translateX(${offset}%)`;
}
/*--------------Hamburguesa menu---------------------*/

const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('menu');

hamburger.addEventListener('click', () => {
    menu.classList.toggle('show');
});

