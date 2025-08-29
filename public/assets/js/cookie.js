// Функция для установки куки
function setCookie(name, value, days) {
    const expires = new Date();
    expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie = name + "=" + value + ";expires=" + expires.toUTCString() + ";path=/";
}

// Функция для получения куки
function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Функция для показа окна предупреждения о куки
function showCookieNotice() {
    const cookieNotice = document.getElementById('cookie-notice');
    if (cookieNotice) {
        cookieNotice.style.display = 'block';
    }
}

// Функция для скрытия окна предупреждения о куки
function hideCookieNotice() {
    const cookieNotice = document.getElementById('cookie-notice');
    if (cookieNotice) {
        cookieNotice.style.display = 'none';
    }
    // Устанавливаем куки на 365 дней
    setCookie('cookiesAccepted', 'true', 365);
}

// Проверяем, принял ли пользователь куки
function checkCookieConsent() {
    const cookiesAccepted = getCookie('cookiesAccepted');
    if (!cookiesAccepted) {
        showCookieNotice();
    }
}

// Инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', function() {
    checkCookieConsent();
});
