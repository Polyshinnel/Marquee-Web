// Функциональность для блока kitchens-variants
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.kitchens-variants-tab');
    const panels = document.querySelectorAll('.kitchens-variants-panel');
    
    // Переключение вкладок
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Убираем активный класс со всех вкладок
            tabs.forEach(t => t.classList.remove('active'));
            panels.forEach(p => p.classList.remove('active'));
            
            // Добавляем активный класс к выбранной вкладке
            this.classList.add('active');
            
            // Показываем соответствующий контент
            const targetPanel = document.querySelector(`[data-panel="${targetTab}"]`);
            if (targetPanel) {
                targetPanel.classList.add('active');
                // Инициализируем слайдер для активной панели
                initKitchenSlider(targetPanel);
            }
        });
    });
    
    // Инициализация слайдера для первой активной панели
    const activePanel = document.querySelector('.kitchens-variants-panel.active');
    if (activePanel) {
        initKitchenSlider(activePanel);
    }
    
    // Функция инициализации слайдера для панели
    function initKitchenSlider(panel) {
        const sliderContainer = panel.querySelector('.kitchens-slider-container');
        const sliderTrack = panel.querySelector('.kitchens-slider-track');
        const slides = panel.querySelectorAll('.kitchens-slider-slide');
        const prevBtn = panel.querySelector('.kitchens-slider-prev');
        const nextBtn = panel.querySelector('.kitchens-slider-next');
        const gridItems = panel.querySelectorAll('.kitchens-grid-item');
        
        let currentIndex = 0;
        const totalSlides = slides.length;
        
        // Показываем первый слайд
        showSlide(0);
        
        // Обработчики для стрелок слайдера
        prevBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            showSlide(currentIndex);
        });
        
        nextBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            currentIndex = (currentIndex + 1) % totalSlides;
            showSlide(currentIndex);
        });
        
        // Обработчики для клика по слайдеру (открытие галереи)
        sliderContainer.addEventListener('click', function() {
            openKitchenGallery(panel, currentIndex);
        });
        
        // Обработчики для сетки картинок
        gridItems.forEach((item, index) => {
            item.addEventListener('click', function() {
                currentIndex = index;
                showSlide(currentIndex);
            });
        });
        
        // Функция показа слайда
        function showSlide(index) {
            // Убираем активный класс со всех слайдов
            slides.forEach(slide => slide.classList.remove('active'));
            gridItems.forEach(item => item.classList.remove('active'));
            
            // Добавляем активный класс к текущему слайду и элементу сетки
            slides[index].classList.add('active');
            gridItems[index].classList.add('active');
            
            currentIndex = index;
        }
    }
    
    // Функция открытия галереи
    function openKitchenGallery(panel, startIndex) {
        const galleryOverlay = document.querySelector('.kitchens-gallery-overlay');
        const galleryTrack = galleryOverlay.querySelector('.kitchens-gallery-track');
        const slides = panel.querySelectorAll('.kitchens-slider-slide');
        const prevBtn = galleryOverlay.querySelector('.kitchens-gallery-prev');
        const nextBtn = galleryOverlay.querySelector('.kitchens-gallery-next');
        const closeBtn = galleryOverlay.querySelector('.kitchens-gallery-close');
        const currentCounter = galleryOverlay.querySelector('.kitchens-gallery-current');
        const totalCounter = galleryOverlay.querySelector('.kitchens-gallery-total');
        
        let currentIndex = startIndex;
        const totalSlides = slides.length;
        
        // Очищаем галерею
        galleryTrack.innerHTML = '';
        
        // Добавляем слайды в галерею
        slides.forEach((slide, index) => {
            const imgSrc = slide.querySelector('img').src;
            const imgAlt = slide.querySelector('img').alt;
            
            const gallerySlide = document.createElement('div');
            gallerySlide.className = `kitchens-gallery-slide ${index === startIndex ? 'active' : ''}`;
            gallerySlide.setAttribute('data-index', index);
            
            gallerySlide.innerHTML = `<img src="${imgSrc}" alt="${imgAlt}">`;
            galleryTrack.appendChild(gallerySlide);
        });
        
        // Обновляем счетчик
        currentCounter.textContent = startIndex + 1;
        totalCounter.textContent = totalSlides;
        
        // Показываем галерею
        galleryOverlay.classList.add('active');
        
        // Функция показа слайда в галерее
        function showGallerySlide(index) {
            const gallerySlides = galleryTrack.querySelectorAll('.kitchens-gallery-slide');
            
            gallerySlides.forEach(slide => slide.classList.remove('active'));
            gallerySlides[index].classList.add('active');
            
            currentCounter.textContent = index + 1;
            currentIndex = index;
        }
        
        // Обработчики для галереи
        prevBtn.addEventListener('click', function() {
            const newIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            showGallerySlide(newIndex);
        });
        
        nextBtn.addEventListener('click', function() {
            const newIndex = (currentIndex + 1) % totalSlides;
            showGallerySlide(newIndex);
        });
        
        closeBtn.addEventListener('click', function() {
            galleryOverlay.classList.remove('active');
        });
        
        // Закрытие по клику на оверлей
        galleryOverlay.addEventListener('click', function(e) {
            if (e.target === galleryOverlay) {
                galleryOverlay.classList.remove('active');
            }
        });
        
        // Закрытие по Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && galleryOverlay.classList.contains('active')) {
                galleryOverlay.classList.remove('active');
            }
        });
    }
});
