// Функция для создания слайдера
function createSlider(sliderContainer, folderNumber) {
    const images = [];
    
    // Создаем массив изображений от 1.png до 6.png
    for (let i = 1; i <= 6; i++) {
        const img = document.createElement('img');
        img.src = `assets/img/manufacturers/${folderNumber}/${i}.png`;
        img.alt = '';
        img.style.position = 'absolute';
        img.style.top = '0';
        img.style.left = '0';
        img.style.width = '100%';
        img.style.height = '100%';
        img.style.objectFit = 'cover';
        img.style.opacity = i === 1 ? '1' : '0';
        img.style.transition = 'opacity 0.8s ease';
        images.push(img);
        sliderContainer.appendChild(img);
    }
    
    let currentIndex = 0;
    
    // Функция для переключения изображений
    function nextImage() {
        images[currentIndex].style.opacity = '0';
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].style.opacity = '1';
    }
    
    // Запускаем слайдер каждые 3 секунды
    setInterval(nextImage, 3000);
}

// Инициализация слайдеров после загрузки DOM
document.addEventListener('DOMContentLoaded', function() {
    const sliders = document.querySelectorAll('.showroom-column__item-block__slider');
    
    sliders.forEach((slider, index) => {
        // Определяем номер папки на основе позиции слайдера
        const folderNumbers = [3, 1, 4, 2, 5];
        const folderNumber = folderNumbers[index];
        
        // Очищаем содержимое слайдера
        slider.innerHTML = '';
        
        // Создаем слайдер
        createSlider(slider, folderNumber);
    });
});
