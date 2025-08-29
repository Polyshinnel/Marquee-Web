document.addEventListener('DOMContentLoaded', function() {
    const feedbackFormOverlay = document.getElementById('feedback-form-overlay');
    const feedbackFormClose = document.getElementById('feedback-form-close');
    const sideMenuCallBtn = document.querySelector('.side-menu-call-btn');
    const feedbackForm = document.getElementById('feedback-form');
    const phoneInput = document.getElementById('feedback-phone');
    const dateInput = document.getElementById('feedback-date');
    const timeInput = document.getElementById('feedback-time');

    // Открытие формы при клике на кнопку "Request a call"
    if (sideMenuCallBtn) {
        sideMenuCallBtn.addEventListener('click', function(e) {
            e.preventDefault();
            openFeedbackForm();
        });
    }

    // Закрытие формы при клике на крестик
    if (feedbackFormClose) {
        feedbackFormClose.addEventListener('click', function() {
            closeFeedbackForm();
        });
    }

    // Закрытие формы при клике на оверлей
    if (feedbackFormOverlay) {
        feedbackFormOverlay.addEventListener('click', function(e) {
            if (e.target === feedbackFormOverlay) {
                closeFeedbackForm();
            }
        });
    }

    // Закрытие формы при нажатии Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && feedbackFormOverlay.classList.contains('active')) {
            closeFeedbackForm();
        }
    });

    // Маска для телефона ОАЭ (+971 XX XXX XXXX)
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length > 0) {
                // Форматируем номер в формате XX XXX XXXX
                if (value.length <= 2) {
                    value = value;
                } else if (value.length <= 5) {
                    value = value.slice(0, 2) + ' ' + value.slice(2);
                } else if (value.length <= 9) {
                    value = value.slice(0, 2) + ' ' + value.slice(2, 5) + ' ' + value.slice(5);
                } else {
                    value = value.slice(0, 2) + ' ' + value.slice(2, 5) + ' ' + value.slice(5, 9);
                }
            }
            
            e.target.value = value;
        });

        // Добавляем префикс +971 при фокусе
        phoneInput.addEventListener('focus', function(e) {
            if (!e.target.value.startsWith('+971 ')) {
                e.target.value = '+971 ' + e.target.value;
            }
        });

        // Убираем префикс при потере фокуса если поле пустое
        phoneInput.addEventListener('blur', function(e) {
            if (e.target.value === '+971 ') {
                e.target.value = '';
            }
        });
    }

    // Календарь для даты
    if (dateInput) {
        dateInput.addEventListener('click', function(e) {
            e.preventDefault();
            showDatePicker(dateInput);
        });

        // Валидация даты
        dateInput.addEventListener('blur', function(e) {
            const value = e.target.value;
            if (value && !isValidDate(value)) {
                e.target.style.borderColor = '#ff4444';
            } else {
                e.target.style.borderColor = 'rgba(255, 255, 255, 0.1)';
            }
        });
    }

    // Маска для времени (HH:MM)
    if (timeInput) {
        timeInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length > 0) {
                if (value.length <= 2) {
                    value = value;
                } else if (value.length <= 4) {
                    value = value.slice(0, 2) + ':' + value.slice(2);
                } else {
                    value = value.slice(0, 2) + ':' + value.slice(2, 4);
                }
            }
            
            e.target.value = value;
        });

        // Валидация времени
        timeInput.addEventListener('blur', function(e) {
            const value = e.target.value;
            if (value && !isValidTime(value)) {
                e.target.style.borderColor = '#ff4444';
            } else {
                e.target.style.borderColor = 'rgba(255, 255, 255, 0.1)';
            }
        });
    }

    // Обработка отправки формы
    if (feedbackForm) {
        feedbackForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = {
                name: document.getElementById('feedback-name').value,
                phone: document.getElementById('feedback-phone').value,
                date: document.getElementById('feedback-date').value,
                time: document.getElementById('feedback-time').value
            };

            // Валидация
            if (!formData.name.trim()) {
                alert('Please enter your name');
                return;
            }

            if (!formData.phone.trim() || !formData.phone.startsWith('+971 ')) {
                alert('Please enter a valid UAE phone number');
                return;
            }

            if (!formData.date.trim() || !isValidDate(formData.date)) {
                alert('Please enter a valid date');
                return;
            }

            if (!formData.time.trim() || !isValidTime(formData.time)) {
                alert('Please enter a valid time');
                return;
            }

            // Здесь можно добавить отправку данных на сервер
            console.log('Form submitted:', formData);
            alert('Thank you! We will call you back at the specified time.');
            closeFeedbackForm();
            feedbackForm.reset();
        });
    }

    function openFeedbackForm() {
        if (feedbackFormOverlay) {
            feedbackFormOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
            
            // Закрываем боковое меню если оно открыто
            const sideMenu = document.getElementById('side-menu');
            const sideMenuOverlay = document.getElementById('side-menu-overlay');
            if (sideMenu && sideMenuOverlay) {
                sideMenu.classList.remove('active');
                sideMenuOverlay.classList.remove('active');
            }
        }
    }

    function closeFeedbackForm() {
        if (feedbackFormOverlay) {
            feedbackFormOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    function isValidDate(dateString) {
        const regex = /^(\d{2})-(\d{2})-(\d{4})$/;
        if (!regex.test(dateString)) return false;
        
        const [, day, month, year] = dateString.match(regex);
        const date = new Date(year, month - 1, day);
        
        return date.getDate() == day && 
               date.getMonth() == month - 1 && 
               date.getFullYear() == year &&
               date >= new Date();
    }

    function isValidTime(timeString) {
        const regex = /^(\d{2}):(\d{2})$/;
        if (!regex.test(timeString)) return false;
        
        const [, hours, minutes] = timeString.match(regex);
        const hour = parseInt(hours);
        const minute = parseInt(minutes);
        
        return hour >= 0 && hour <= 23 && minute >= 0 && minute <= 59;
    }

    // Функция для показа календаря
    function showDatePicker(input) {
        // Удаляем существующий календарь если есть
        const existingCalendar = document.getElementById('date-picker');
        if (existingCalendar) {
            existingCalendar.remove();
        }

        const calendar = document.createElement('div');
        calendar.id = 'date-picker';
        calendar.style.cssText = `
            position: absolute;
            top: 100%;
            left: 0;
            background: #1c1c1c;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 16px;
            z-index: 10000;
            min-width: 280px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        `;

        const today = new Date();
        const currentMonth = today.getMonth();
        const currentYear = today.getFullYear();

        // Заголовок календаря
        const header = document.createElement('div');
        header.style.cssText = `
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
            color: #e5e5e5;
            font-family: "GeistMono-Regular", monospace;
        `;

        const monthYear = document.createElement('span');
        monthYear.textContent = new Date(currentYear, currentMonth).toLocaleDateString('en-US', { month: 'long', year: 'numeric' });
        monthYear.style.fontSize = '16px';

        const prevBtn = document.createElement('button');
        prevBtn.innerHTML = '‹';
        prevBtn.style.cssText = `
            background: none;
            border: none;
            color: #e5e5e5;
            font-size: 20px;
            cursor: pointer;
            padding: 4px 8px;
            border-radius: 4px;
            transition: background 0.2s;
        `;

        const nextBtn = document.createElement('button');
        nextBtn.innerHTML = '›';
        nextBtn.style.cssText = prevBtn.style.cssText;

        header.appendChild(prevBtn);
        header.appendChild(monthYear);
        header.appendChild(nextBtn);

        // Дни недели
        const weekdays = document.createElement('div');
        weekdays.style.cssText = `
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 4px;
            margin-bottom: 8px;
        `;

        const daysOfWeek = ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'];
        daysOfWeek.forEach(day => {
            const dayElement = document.createElement('div');
            dayElement.textContent = day;
            dayElement.style.cssText = `
                text-align: center;
                padding: 8px;
                color: #7c7c7c;
                font-family: "GeistMono-Regular", monospace;
                font-size: 12px;
            `;
            weekdays.appendChild(dayElement);
        });

        // Дни месяца
        const daysContainer = document.createElement('div');
        daysContainer.style.cssText = `
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 4px;
        `;

        function renderCalendar(month, year) {
            daysContainer.innerHTML = '';
            monthYear.textContent = new Date(year, month).toLocaleDateString('en-US', { month: 'long', year: 'numeric' });

            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);
            const startDate = new Date(firstDay);
            startDate.setDate(startDate.getDate() - firstDay.getDay());

            for (let i = 0; i < 42; i++) {
                const date = new Date(startDate);
                date.setDate(startDate.getDate() + i);

                const dayElement = document.createElement('div');
                dayElement.textContent = date.getDate();
                dayElement.style.cssText = `
                    text-align: center;
                    padding: 8px;
                    cursor: pointer;
                    border-radius: 4px;
                    font-family: "GeistMono-Regular", monospace;
                    font-size: 14px;
                    transition: all 0.2s;
                `;

                const isCurrentMonth = date.getMonth() === month;
                const isToday = date.toDateString() === today.toDateString();
                const isPast = date < new Date(today.getFullYear(), today.getMonth(), today.getDate());

                if (!isCurrentMonth) {
                    dayElement.style.color = '#444';
                } else if (isToday) {
                    dayElement.style.background = '#e5e5e5';
                    dayElement.style.color = '#131313';
                } else if (isPast) {
                    dayElement.style.color = '#666';
                    dayElement.style.cursor = 'not-allowed';
                } else {
                    dayElement.style.color = '#e5e5e5';
                }

                if (isCurrentMonth && !isPast) {
                    dayElement.addEventListener('click', function() {
                        const formattedDate = date.getDate().toString().padStart(2, '0') + '-' + 
                                            (date.getMonth() + 1).toString().padStart(2, '0') + '-' + 
                                            date.getFullYear();
                        input.value = formattedDate;
                        calendar.remove();
                    });

                    dayElement.addEventListener('mouseenter', function() {
                        if (!isToday) {
                            this.style.background = 'rgba(255, 255, 255, 0.1)';
                        }
                    });

                    dayElement.addEventListener('mouseleave', function() {
                        if (!isToday) {
                            this.style.background = 'transparent';
                        }
                    });
                }

                daysContainer.appendChild(dayElement);
            }
        }

        renderCalendar(currentMonth, currentYear);

        // Обработчики кнопок навигации
        let currentMonthIndex = currentMonth;
        let currentYearIndex = currentYear;

        prevBtn.addEventListener('click', function() {
            currentMonthIndex--;
            if (currentMonthIndex < 0) {
                currentMonthIndex = 11;
                currentYearIndex--;
            }
            renderCalendar(currentMonthIndex, currentYearIndex);
        });

        nextBtn.addEventListener('click', function() {
            currentMonthIndex++;
            if (currentMonthIndex > 11) {
                currentMonthIndex = 0;
                currentYearIndex++;
            }
            renderCalendar(currentMonthIndex, currentYearIndex);
        });

        calendar.appendChild(header);
        calendar.appendChild(weekdays);
        calendar.appendChild(daysContainer);

        // Позиционируем календарь
        const inputRect = input.getBoundingClientRect();
        calendar.style.top = (inputRect.bottom + 5) + 'px';
        calendar.style.left = inputRect.left + 'px';

        // Закрытие календаря при клике вне его
        document.addEventListener('click', function closeCalendar(e) {
            if (!calendar.contains(e.target) && e.target !== input) {
                calendar.remove();
                document.removeEventListener('click', closeCalendar);
            }
        });

        document.body.appendChild(calendar);
    }
});
