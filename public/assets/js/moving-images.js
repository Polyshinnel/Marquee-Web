// Функциональность для блока с движущимися изображениями
document.addEventListener('DOMContentLoaded', function() {
    const movingImageItems = document.querySelectorAll('.moving-image-item');
    const galleryOverlay = document.querySelector('.moving-images-gallery-overlay');
    const galleryTrack = galleryOverlay.querySelector('.moving-images-gallery-track');
    const prevBtn = galleryOverlay.querySelector('.moving-images-gallery-prev');
    const nextBtn = galleryOverlay.querySelector('.moving-images-gallery-next');
    const closeBtn = galleryOverlay.querySelector('.moving-images-gallery-close');
    const currentCounter = galleryOverlay.querySelector('.moving-images-gallery-current');
    const totalCounter = galleryOverlay.querySelector('.moving-images-gallery-total');
    
    let currentIndex = 0;
    const totalImages = movingImageItems.length;
    
    // Обработчики для клика по изображениям
    movingImageItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            openGallery(index);
        });
    });
    
    // Функция открытия галереи
    function openGallery(startIndex) {
        currentIndex = startIndex;
        
        // Очищаем галерею
        galleryTrack.innerHTML = '';
        
        // Добавляем изображения в галерею
        movingImageItems.forEach((item, index) => {
            const imgSrc = item.querySelector('img').src;
            const imgAlt = item.querySelector('img').alt;
            
            const gallerySlide = document.createElement('div');
            gallerySlide.className = `moving-images-gallery-slide ${index === startIndex ? 'active' : ''}`;
            gallerySlide.setAttribute('data-index', index);
            
            gallerySlide.innerHTML = `<img src="${imgSrc}" alt="${imgAlt}">`;
            galleryTrack.appendChild(gallerySlide);
        });
        
        // Обновляем счетчик
        currentCounter.textContent = startIndex + 1;
        totalCounter.textContent = totalImages;
        
        // Показываем галерею
        galleryOverlay.classList.add('active');
        
        // Останавливаем анимацию движущихся изображений
        const movingTrack = document.querySelector('.moving-images-track');
        if (movingTrack) {
            movingTrack.style.animationPlayState = 'paused';
        }
    }
    
    // Функция показа слайда в галерее
    function showGallerySlide(index) {
        const gallerySlides = galleryTrack.querySelectorAll('.moving-images-gallery-slide');
        
        gallerySlides.forEach(slide => slide.classList.remove('active'));
        gallerySlides[index].classList.add('active');
        
        currentCounter.textContent = index + 1;
        currentIndex = index;
    }
    
    // Обработчики для галереи
    prevBtn.addEventListener('click', function() {
        const newIndex = (currentIndex - 1 + totalImages) % totalImages;
        showGallerySlide(newIndex);
    });
    
    nextBtn.addEventListener('click', function() {
        const newIndex = (currentIndex + 1) % totalImages;
        showGallerySlide(newIndex);
    });
    
    closeBtn.addEventListener('click', function() {
        closeGallery();
    });
    
    // Закрытие по клику на оверлей
    galleryOverlay.addEventListener('click', function(e) {
        if (e.target === galleryOverlay) {
            closeGallery();
        }
    });
    
    // Закрытие по Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && galleryOverlay.classList.contains('active')) {
            closeGallery();
        }
    });
    
    // Функция закрытия галереи
    function closeGallery() {
        galleryOverlay.classList.remove('active');
        
        // Возобновляем анимацию движущихся изображений
        const movingTrack = document.querySelector('.moving-images-track');
        if (movingTrack) {
            movingTrack.style.animationPlayState = 'running';
        }
    }
    
    // Обработчики для клавиш стрелок
    document.addEventListener('keydown', function(e) {
        if (!galleryOverlay.classList.contains('active')) return;
        
        if (e.key === 'ArrowLeft') {
            const newIndex = (currentIndex - 1 + totalImages) % totalImages;
            showGallerySlide(newIndex);
        } else if (e.key === 'ArrowRight') {
            const newIndex = (currentIndex + 1) % totalImages;
            showGallerySlide(newIndex);
        }
    });
});
