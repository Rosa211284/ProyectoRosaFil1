let indices = {};
function moverCarrusel(direction, carouselId) {
    if (!(carouselId in indices)) {
        indices[carouselId] = 0;
    }
    
    const carousel = document.getElementById(carouselId);
    const totalImages = carousel.children.length;
    const visibleImages = 3;
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

    // Slider automático
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
    setInterval(autoSlide, 3000); // Cambia cada 3 segundos