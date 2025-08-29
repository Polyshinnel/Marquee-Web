document.addEventListener('DOMContentLoaded', function() {
    // Инициализация Яндекс карты
    function initMap() {
        if (typeof ymaps !== 'undefined') {
            ymaps.ready(function() {
                try {
                    const map = new ymaps.Map('yandex-map', {
                        center: [25.13727155770994, 55.244827355819645],
                        zoom: 16
                    });

                    // Создаем кастомную метку
                    const placemark = new ymaps.Placemark([25.13727155770994, 55.244827355819645], {
                        balloonContent: 'Marquee Design'
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: 'assets/img/logo-small.svg',
                        iconImageSize: [40, 40],
                        iconImageOffset: [-20, -20]
                    });

                    map.geoObjects.add(placemark);
                } catch (error) {
                    console.error('Ошибка инициализации карты:', error);
                }
            });
        }
    }

    // Загружаем API Яндекс карт
    function loadYandexMapsAPI() {
        const script = document.createElement('script');
        script.src = 'https://api-maps.yandex.ru/2.1/?apikey=ddda0c18-95d3-493d-820b-a7304bc04e5c&lang=en_US';
        script.onload = initMap;
        script.onerror = function() {
            console.error('Ошибка загрузки API Яндекс карт');
        };
        document.head.appendChild(script);
    }

    // Проверяем, есть ли элемент карты на странице
    const mapElement = document.getElementById('yandex-map');
    if (mapElement) {
        loadYandexMapsAPI();
    }

    // Обработчик для кнопки "Request a call" в блоке адреса
    const mainAddressCallBtn = document.querySelector('.main-address-call-btn');
    if (mainAddressCallBtn) {
        mainAddressCallBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const feedbackFormOverlay = document.getElementById('feedback-form-overlay');
            if (feedbackFormOverlay) {
                feedbackFormOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    }
});
