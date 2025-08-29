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

// Инициализация главного слайдера
document.addEventListener('DOMContentLoaded', function() {
    // Инициализация главного слайдера
    if (document.querySelector('.main-page-slider')) {
        new MainSlider();
    }
});
