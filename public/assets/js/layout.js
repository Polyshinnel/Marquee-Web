// Функциональность для выезжающего меню и анимации header при прокрутке
document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.querySelector('.header-menu-button');
    const sideMenu = document.getElementById('side-menu');
    const sideMenuOverlay = document.getElementById('side-menu-overlay');
    const closeButton = document.getElementById('side-menu-close');

    // Элементы для анимации при прокрутке
    const headerPhone = document.querySelector('.header-phone');
    const headerLocation = document.querySelector('.header-location');
    const langSwitchDirections = document.querySelector('.lang-switch-directions');
    const logoDirections = document.querySelector('.logo-directions');

    // Открытие меню
    function openMenu() {
        sideMenu.classList.add('active');
        sideMenuOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // Закрытие меню
    function closeMenu() {
        sideMenu.classList.remove('active');
        sideMenuOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Функция для управления видимостью элементов header при прокрутке
    function handleScrollAnimation() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const windowHeight = window.innerHeight;
        
        // Показываем элементы при прокрутке на высоту экрана
        if (scrollTop >= windowHeight * 0.8) {
            headerPhone?.classList.add('visible');
            headerLocation?.classList.add('visible');
            langSwitchDirections?.classList.add('visible');
            logoDirections?.classList.add('visible');
        } else {
            headerPhone?.classList.remove('visible');
            headerLocation?.classList.remove('visible');
            langSwitchDirections?.classList.remove('visible');
            logoDirections?.classList.remove('visible');
        }
    }

    // Обработчики событий
    if (menuButton) {
        menuButton.addEventListener('click', openMenu);
    }

    if (closeButton) {
        closeButton.addEventListener('click', closeMenu);
    }

    if (sideMenuOverlay) {
        sideMenuOverlay.addEventListener('click', closeMenu);
    }

    // Закрытие по клавише Escape
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && sideMenu.classList.contains('active')) {
            closeMenu();
        }
    });

    // Обработчик прокрутки с throttling для производительности
    let ticking = false;
    function updateScroll() {
        handleScrollAnimation();
        ticking = false;
    }

    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateScroll);
            ticking = true;
        }
    }

    window.addEventListener('scroll', requestTick);
    
    // Инициализация состояния при загрузке страницы
    handleScrollAnimation();
});
