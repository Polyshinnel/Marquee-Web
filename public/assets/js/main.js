// Функция для создания слайдера
function createSlider(sliderContainer, folderNumber) {
    // Проверяем, что folderNumber определен
    if (folderNumber === undefined || folderNumber === null) {
        console.warn('Folder number is undefined for slider:', sliderContainer);
        return;
    }
    
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
        
        // Добавляем обработчик ошибок загрузки изображения
        img.onerror = function() {
            console.warn(`Failed to load image: assets/img/manufacturers/${folderNumber}/${i}.png`);
        };
        
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
    // Получаем только десктопные слайдеры (исключаем мобильные)
    const sliders = document.querySelectorAll('.showroom-column__item-block__slider');
    const desktopSliders = Array.from(sliders).filter((slider, index) => {
        // Проверяем, находится ли слайдер в десктопной версии (не в .showroom-blocks-mobile)
        return !slider.closest('.showroom-blocks-mobile');
    });
    
    // Получаем мобильные слайдеры (только те, что не в мобильном слайдере)
    const mobileSliders = Array.from(sliders).filter((slider, index) => {
        // Проверяем, находится ли слайдер в мобильной версии, но не в мобильном слайдере
        return slider.closest('.showroom-blocks-mobile') && !slider.closest('.showroom-mobile-slider-track');
    });
    
    // Инициализация десктопных слайдеров
    console.log('Desktop sliders found:', desktopSliders.length);
    desktopSliders.forEach((slider, index) => {
        // Определяем номер папки на основе позиции слайдера
        const folderNumbers = [3, 1, 4, 2, 5];
        const folderNumber = folderNumbers[index];
        
        console.log(`Desktop slider ${index}: folder ${folderNumber}`);
        
        // Очищаем содержимое слайдера
        slider.innerHTML = '';
        
        // Создаем слайдер
        createSlider(slider, folderNumber);
    });
    
    // Инициализация мобильных слайдеров (внутри мобильного слайдера)
    console.log('Mobile sliders found:', mobileSliders.length);
    mobileSliders.forEach((slider, index) => {
        // Определяем номер папки на основе позиции слайдера
        const folderNumbers = [3, 1, 4, 2, 5];
        const folderNumber = folderNumbers[index];
        
        console.log(`Mobile slider ${index}: folder ${folderNumber}`);
        
        // Очищаем содержимое слайдера
        slider.innerHTML = '';
        
        // Создаем слайдер
        createSlider(slider, folderNumber);
    });
    
    // Инициализация слайдеров внутри мобильного слайдера
    const mobileSliderTrack = document.querySelector('.showroom-mobile-slider-track');
    if (mobileSliderTrack) {
        const mobileTrackSliders = mobileSliderTrack.querySelectorAll('.showroom-column__item-block__slider');
        console.log('Mobile track sliders found:', mobileTrackSliders.length);
        
        mobileTrackSliders.forEach((slider, index) => {
            // Определяем номер папки на основе позиции слайдера
            const folderNumbers = [3, 1, 4, 2, 5];
            const folderNumber = folderNumbers[index];
            
            console.log(`Mobile track slider ${index}: folder ${folderNumber}`);
            
            // Очищаем содержимое слайдера
            slider.innerHTML = '';
            
            // Создаем слайдер
            createSlider(slider, folderNumber);
        });
    }
});

// Главный слайдер
class MainSlider {
    constructor() {
        this.currentIndex = 0;
        this.slides = document.querySelectorAll('.main-slider-slide');
        this.totalSlides = this.slides.length;
        this.gallerySlides = document.querySelectorAll('.main-gallery-slide');
        this.galleryOverlay = document.querySelector('.main-gallery-overlay');
        this.galleryCurrent = document.querySelector('.main-gallery-current');
        this.galleryTotal = document.querySelector('.main-gallery-total');
        this.autoSlideInterval = null;
        
        this.init();
    }
    
    init() {
        this.updateSlider();
        this.bindEvents();
        this.galleryTotal.textContent = this.totalSlides;
        this.startAutoSlide();
    }
    
    bindEvents() {
        // Стрелки слайдера
        document.querySelector('.main-slider-prev').addEventListener('click', () => {
            this.stopAutoSlide();
            this.prev();
            this.startAutoSlide();
        });
        document.querySelector('.main-slider-next').addEventListener('click', () => {
            this.stopAutoSlide();
            this.next();
            this.startAutoSlide();
        });
        
        // Стрелки галереи
        document.querySelector('.main-gallery-prev').addEventListener('click', () => this.galleryPrev());
        document.querySelector('.main-gallery-next').addEventListener('click', () => this.galleryNext());
        
        // Клики по слайдам для открытия галереи
        this.slides.forEach((slide, index) => {
            slide.addEventListener('click', () => this.openGallery(index));
        });
        
        // Закрытие галереи
        document.querySelector('.main-gallery-close').addEventListener('click', () => this.closeGallery());
        this.galleryOverlay.addEventListener('click', (e) => {
            if (e.target === this.galleryOverlay) {
                this.closeGallery();
            }
        });
        
        // Клавиши
        document.addEventListener('keydown', (e) => {
            if (this.galleryOverlay.classList.contains('active')) {
                if (e.key === 'Escape') {
                    this.closeGallery();
                } else if (e.key === 'ArrowLeft') {
                    this.galleryPrev();
                } else if (e.key === 'ArrowRight') {
                    this.galleryNext();
                }
            }
        });
        
        // Остановка автопрокрутки при наведении на слайдер
        const sliderContainer = document.querySelector('.main-slider-container');
        sliderContainer.addEventListener('mouseenter', () => this.stopAutoSlide());
        sliderContainer.addEventListener('mouseleave', () => this.startAutoSlide());
    }
    
    updateSlider() {
        this.slides.forEach((slide, index) => {
            slide.classList.remove('active', 'prev', 'next', 'hidden');
            
            if (index === this.currentIndex) {
                slide.classList.add('active');
            } else if (index === this.getPrevIndex()) {
                slide.classList.add('prev');
            } else if (index === this.getNextIndex()) {
                slide.classList.add('next');
            } else {
                slide.classList.add('hidden');
            }
        });
    }
    
    updateGallery() {
        this.gallerySlides.forEach((slide, index) => {
            slide.classList.remove('active');
            if (index === this.currentIndex) {
                slide.classList.add('active');
            }
        });
        this.galleryCurrent.textContent = this.currentIndex + 1;
    }
    
    getPrevIndex() {
        return this.currentIndex === 0 ? this.totalSlides - 1 : this.currentIndex - 1;
    }
    
    getNextIndex() {
        return this.currentIndex === this.totalSlides - 1 ? 0 : this.currentIndex + 1;
    }
    
    prev() {
        this.currentIndex = this.getPrevIndex();
        this.updateSlider();
    }
    
    next() {
        this.currentIndex = this.getNextIndex();
        this.updateSlider();
    }
    
    galleryPrev() {
        this.currentIndex = this.getPrevIndex();
        this.updateSlider();
        this.updateGallery();
    }
    
    galleryNext() {
        this.currentIndex = this.getNextIndex();
        this.updateSlider();
        this.updateGallery();
    }
    
    openGallery(index) {
        this.currentIndex = index;
        this.updateSlider();
        this.updateGallery();
        this.galleryOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    closeGallery() {
        this.galleryOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    startAutoSlide() {
        this.stopAutoSlide();
        this.autoSlideInterval = setInterval(() => {
            this.next();
        }, 4000);
    }
    
    stopAutoSlide() {
        if (this.autoSlideInterval) {
            clearInterval(this.autoSlideInterval);
            this.autoSlideInterval = null;
        }
    }
}

// Supply слайдер
class SupplySlider {
    constructor() {
        this.currentIndex = 0;
        this.totalSlides = 7;
        this.sliderImage = document.querySelector('.supply-slider-image');
        this.gallerySlides = document.querySelectorAll('.supply-gallery-slide');
        this.galleryOverlay = document.querySelector('.supply-gallery-overlay');
        this.galleryCurrent = document.querySelector('.supply-gallery-current');
        this.galleryTotal = document.querySelector('.supply-gallery-total');
        this.autoSlideInterval = null;
        
        this.init();
    }
    
    init() {
        this.updateSlider();
        this.bindEvents();
        this.galleryTotal.textContent = this.totalSlides;
        this.startAutoSlide();
    }
    
    bindEvents() {
        // Клик по слайдеру для открытия галереи
        document.querySelector('.supply-main-block-col__slider').addEventListener('click', () => {
            this.openGallery(this.currentIndex);
        });
        
        // Стрелки галереи
        document.querySelector('.supply-gallery-prev').addEventListener('click', () => this.galleryPrev());
        document.querySelector('.supply-gallery-next').addEventListener('click', () => this.galleryNext());
        
        // Закрытие галереи
        document.querySelector('.supply-gallery-close').addEventListener('click', () => this.closeGallery());
        this.galleryOverlay.addEventListener('click', (e) => {
            if (e.target === this.galleryOverlay) {
                this.closeGallery();
            }
        });
        
        // Клавиши
        document.addEventListener('keydown', (e) => {
            if (this.galleryOverlay.classList.contains('active')) {
                if (e.key === 'Escape') {
                    this.closeGallery();
                } else if (e.key === 'ArrowLeft') {
                    this.galleryPrev();
                } else if (e.key === 'ArrowRight') {
                    this.galleryNext();
                }
            }
        });
        
        // Остановка автопрокрутки при наведении на слайдер
        const sliderContainer = document.querySelector('.supply-main-block-col__slider');
        sliderContainer.addEventListener('mouseenter', () => this.stopAutoSlide());
        sliderContainer.addEventListener('mouseleave', () => this.startAutoSlide());
    }
    
    updateSlider() {
        // Плавное исчезновение текущего изображения
        this.sliderImage.style.opacity = '0';
        this.sliderImage.style.transform = 'scale(1.05)';
        
        // После исчезновения меняем изображение и плавно показываем
        setTimeout(() => {
            this.sliderImage.src = `assets/img/small-slider/${this.currentIndex + 1}.webp`;
            this.sliderImage.style.opacity = '1';
            this.sliderImage.style.transform = 'scale(1)';
        }, 300);
    }
    
    updateGallery() {
        this.gallerySlides.forEach((slide, index) => {
            slide.classList.remove('active');
            if (index === this.currentIndex) {
                slide.classList.add('active');
            }
        });
        this.galleryCurrent.textContent = this.currentIndex + 1;
    }
    
    getPrevIndex() {
        return this.currentIndex === 0 ? this.totalSlides - 1 : this.currentIndex - 1;
    }
    
    getNextIndex() {
        return this.currentIndex === this.totalSlides - 1 ? 0 : this.currentIndex + 1;
    }
    
    next() {
        this.currentIndex = this.getNextIndex();
        this.updateSlider();
    }
    
    galleryPrev() {
        this.currentIndex = this.getPrevIndex();
        this.updateSlider();
        this.updateGallery();
    }
    
    galleryNext() {
        this.currentIndex = this.getNextIndex();
        this.updateSlider();
        this.updateGallery();
    }
    
    openGallery(index) {
        this.currentIndex = index;
        this.updateSlider();
        this.updateGallery();
        this.galleryOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    closeGallery() {
        this.galleryOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    startAutoSlide() {
        this.stopAutoSlide();
        this.autoSlideInterval = setInterval(() => {
            this.next();
        }, 3000);
    }
    
    stopAutoSlide() {
        if (this.autoSlideInterval) {
            clearInterval(this.autoSlideInterval);
            this.autoSlideInterval = null;
        }
    }
}

// Мобильный слайдер для showroom блоков
class ShowroomMobileSlider {
    constructor() {
        this.container = document.querySelector('.showroom-mobile-slider-container');
        this.track = document.querySelector('.showroom-mobile-slider-track');
        this.slides = document.querySelectorAll('.showroom-mobile-slider-track .showroom-column__item');
        this.indicators = document.querySelectorAll('.showroom-mobile-slider-indicator');
        this.currentIndex = 0;
        this.totalSlides = this.slides.length;
        this.autoSlideInterval = null;
        this.isDragging = false;
        this.startX = 0;
        this.currentX = 0;
        this.translateX = 0;
        
        this.init();
    }
    
    init() {
        this.updateSlider();
        this.bindEvents();
        this.startAutoSlide();
    }
    
    bindEvents() {
        // Обработчики для индикаторов
        this.indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                this.stopAutoSlide();
                this.goToSlide(index);
                this.startAutoSlide();
            });
        });
        
        // Обработчики для свайпов
        this.container.addEventListener('touchstart', (e) => this.handleTouchStart(e));
        this.container.addEventListener('touchmove', (e) => this.handleTouchMove(e));
        this.container.addEventListener('touchend', (e) => this.handleTouchEnd(e));
        
        // Обработчики для мыши (для десктопа)
        this.container.addEventListener('mousedown', (e) => this.handleMouseDown(e));
        this.container.addEventListener('mousemove', (e) => this.handleMouseMove(e));
        this.container.addEventListener('mouseup', (e) => this.handleMouseUp(e));
        this.container.addEventListener('mouseleave', (e) => this.handleMouseLeave(e));
        
        // Остановка автопрокрутки при наведении
        this.container.addEventListener('mouseenter', () => this.stopAutoSlide());
        this.container.addEventListener('mouseleave', () => this.startAutoSlide());
        
        // Предотвращение выделения текста при свайпах
        this.container.addEventListener('selectstart', (e) => e.preventDefault());
    }
    
    handleTouchStart(e) {
        this.isDragging = true;
        this.startX = e.touches[0].clientX;
        this.currentX = this.startX;
        this.translateX = this.getCurrentTranslate();
        this.stopAutoSlide();
    }
    
    handleTouchMove(e) {
        if (!this.isDragging) return;
        
        e.preventDefault();
        this.currentX = e.touches[0].clientX;
        const diff = this.currentX - this.startX;
        const newTranslate = this.translateX + diff;
        
        this.track.style.transform = `translateX(${newTranslate}px)`;
    }
    
    handleTouchEnd(e) {
        if (!this.isDragging) return;
        
        this.isDragging = false;
        const diff = this.currentX - this.startX;
        const threshold = this.container.offsetWidth * 0.3; // 30% от ширины контейнера
        
        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                this.prev();
            } else {
                this.next();
            }
        } else {
            this.updateSlider(); // Возвращаемся к текущему слайду
        }
        
        this.startAutoSlide();
    }
    
    handleMouseDown(e) {
        this.isDragging = true;
        this.startX = e.clientX;
        this.currentX = this.startX;
        this.translateX = this.getCurrentTranslate();
        this.stopAutoSlide();
        this.container.style.cursor = 'grabbing';
    }
    
    handleMouseMove(e) {
        if (!this.isDragging) return;
        
        e.preventDefault();
        this.currentX = e.clientX;
        const diff = this.currentX - this.startX;
        const newTranslate = this.translateX + diff;
        
        this.track.style.transform = `translateX(${newTranslate}px)`;
    }
    
    handleMouseUp(e) {
        if (!this.isDragging) return;
        
        this.isDragging = false;
        this.container.style.cursor = 'grab';
        const diff = this.currentX - this.startX;
        const threshold = this.container.offsetWidth * 0.3;
        
        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                this.prev();
            } else {
                this.next();
            }
        } else {
            this.updateSlider();
        }
        
        this.startAutoSlide();
    }
    
    handleMouseLeave(e) {
        if (this.isDragging) {
            this.handleMouseUp(e);
        }
    }
    
    getCurrentTranslate() {
        const transform = window.getComputedStyle(this.track).transform;
        if (transform === 'none') return 0;
        
        const matrix = new DOMMatrix(transform);
        return matrix.m41;
    }
    
    updateSlider() {
        const translateX = -this.currentIndex * 100;
        this.track.style.transform = `translateX(${translateX}%)`;
        
        // Обновляем индикаторы
        this.indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === this.currentIndex);
        });
    }
    
    goToSlide(index) {
        this.currentIndex = index;
        this.updateSlider();
    }
    
    prev() {
        this.currentIndex = this.currentIndex === 0 ? this.totalSlides - 1 : this.currentIndex - 1;
        this.updateSlider();
    }
    
    next() {
        this.currentIndex = this.currentIndex === this.totalSlides - 1 ? 0 : this.currentIndex + 1;
        this.updateSlider();
    }
    
    startAutoSlide() {
        this.stopAutoSlide();
        this.autoSlideInterval = setInterval(() => {
            this.next();
        }, 5000); // 5 секунд
    }
    
    stopAutoSlide() {
        if (this.autoSlideInterval) {
            clearInterval(this.autoSlideInterval);
            this.autoSlideInterval = null;
        }
    }
}

// Инициализация главного слайдера
document.addEventListener('DOMContentLoaded', function() {
    // Инициализация главного слайдера
    if (document.querySelector('.main-page-slider')) {
        new MainSlider();
    }
    
    // Инициализация supply слайдера
    if (document.querySelector('.supply-main-block-col__slider')) {
        new SupplySlider();
    }
    
    // Инициализация мобильного слайдера showroom
    if (document.querySelector('.showroom-mobile-slider-container')) {
        new ShowroomMobileSlider();
    }
});
