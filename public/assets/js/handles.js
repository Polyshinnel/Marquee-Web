// Функциональность для блока handles-selection
document.addEventListener('DOMContentLoaded', function() {
    const handleButtons = document.querySelectorAll('.handles-btn');
    const sliderTrack = document.querySelector('.handles-slider-track');
    const prevBtn = document.querySelector('.handles-slider-prev');
    const nextBtn = document.querySelector('.handles-slider-next');
    const currentCounter = document.querySelector('.handles-slider-current');
    const totalCounter = document.querySelector('.handles-slider-total');
    
    let currentIndex = 0;
    let currentSlides = [];
    let totalSlides = 0;
    
    // Конфигурация для каждого типа ручек
    const handlesConfig = {
        'Memo': { category: 'Invisible', count: 9 },
        'Goccia': { category: 'Invisible', count: 12 },
        'Linea': { category: 'Invisible', count: 15 },
        'Monoliti': { category: 'Invisible', count: 6 },
        'Tecna': { category: 'Invisible', count: 8 },
        'Petra': { category: 'Invisible', count: 4 },
        'Presa': { category: 'Invisible', count: 11 },
        'Profili': { category: 'Invisible', count: 5 },
        'Vela': { category: 'Invisible', count: 7 },
        'Materia': { category: 'Invisible', count: 8 },
        'Murano': { category: 'Invisible', count: 9 },
        'Slim': { category: 'Invisible', count: 9 },
        'Trim': { category: 'Invisible', count: 9 },
        'Crea': { category: 'Visible', count: 9 },
        'Amica': { category: 'Visible', count: 2 }
    };
    
    // Обработчики для кнопок ручек
    handleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const handleName = this.getAttribute('data-handle');
            const handleCategory = this.getAttribute('data-category');
            
            // Убираем активный класс со всех кнопок
            handleButtons.forEach(btn => btn.classList.remove('active'));
            
            // Добавляем активный класс к нажатой кнопке
            this.classList.add('active');
            
            // Загружаем изображения для выбранной ручки
            loadHandleImages(handleName, handleCategory);
        });
    });
    
    // Функция загрузки изображений для выбранной ручки
    function loadHandleImages(handleName, handleCategory) {
        const config = handlesConfig[handleName];
        if (!config) return;
        
        currentSlides = [];
        currentIndex = 0;
        totalSlides = config.count;
        
        // Очищаем слайдер
        sliderTrack.innerHTML = '';
        
        // Создаем слайды
        for (let i = 1; i <= config.count; i++) {
            const slide = document.createElement('div');
            slide.className = `handles-slider-slide ${i === 1 ? 'active' : ''}`;
            slide.setAttribute('data-index', i - 1);
            
            const img = document.createElement('img');
            img.src = `assets/img/kitchens/kitchen-handles/${handleCategory}/${handleName}/${i}.jpg`;
            img.alt = `${handleName} ${i}`;
            
            slide.appendChild(img);
            sliderTrack.appendChild(slide);
            currentSlides.push(slide);
        }
        
        // Обновляем счетчик
        currentCounter.textContent = '1';
        totalCounter.textContent = totalSlides;
        
        // Показываем первый слайд
        showSlide(0);
    }
    
    // Функция показа слайда
    function showSlide(index) {
        if (currentSlides.length === 0) return;
        
        // Убираем активный класс со всех слайдов
        currentSlides.forEach(slide => slide.classList.remove('active'));
        
        // Добавляем активный класс к текущему слайду
        currentSlides[index].classList.add('active');
        
        // Обновляем счетчик
        currentCounter.textContent = index + 1;
        currentIndex = index;
    }
    
    // Обработчики для стрелок слайдера
    prevBtn.addEventListener('click', function() {
        if (currentSlides.length === 0) return;
        const newIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        showSlide(newIndex);
    });
    
    nextBtn.addEventListener('click', function() {
        if (currentSlides.length === 0) return;
        const newIndex = (currentIndex + 1) % totalSlides;
        showSlide(newIndex);
    });
    
    // Автоматическая загрузка первой ручки при загрузке страницы
    const firstButton = document.querySelector('.handles-btn[data-handle="Memo"]');
    if (firstButton) {
        firstButton.click();
    }
});
