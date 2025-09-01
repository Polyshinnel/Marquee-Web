document.addEventListener('DOMContentLoaded', function() {
    const feedbackForm = document.querySelector('.feedback-form');
    const submitButton = document.querySelector('.feedback-form-submit');
    const originalButtonText = submitButton ? submitButton.textContent : 'Send';
    
    // Инициализация маски телефона
    initPhoneMask();
    
    function initPhoneMask() {
        const phoneInput = document.getElementById('feedback-phone');
        
        if (!phoneInput) return;
        
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.startsWith('971')) {
                value = value.substring(3);
            }
            
            if (value.length > 0) {
                value = '+971 ' + value;
            }
            
            if (value.length > 5) {
                value = value.substring(0, 5) + ' ' + value.substring(5);
            }
            
            if (value.length > 9) {
                value = value.substring(0, 9) + ' ' + value.substring(9);
            }
            
            if (value.length > 13) {
                value = value.substring(0, 13) + ' ' + value.substring(13);
            }
            
            e.target.value = value;
        });
    }
    
    // Элементы для открытия/закрытия формы
    const feedbackOverlay = document.getElementById('feedback-form-overlay');
    const feedbackCloseBtn = document.getElementById('feedback-form-close');
    const mainAddressCallBtn = document.querySelector('.main-address-call-btn');
    const sideMenuCallBtn = document.querySelector('.side-menu-call-btn');
    
    // Открытие формы обратной связи
    function openFeedbackForm() {
        if (feedbackOverlay) {
            feedbackOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }
    
    // Закрытие формы обратной связи
    function closeFeedbackForm() {
        if (feedbackOverlay) {
            feedbackOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    }
    
    // Обработчики для открытия формы
    if (mainAddressCallBtn) {
        mainAddressCallBtn.addEventListener('click', function(e) {
            openFeedbackForm();
        });
    }
    
    if (sideMenuCallBtn) {
        sideMenuCallBtn.addEventListener('click', function(e) {
            openFeedbackForm();
        });
    }
    
    // Обработчик для закрытия формы
    if (feedbackCloseBtn) {
        feedbackCloseBtn.addEventListener('click', closeFeedbackForm);
    }
    
    // Закрытие формы при клике на оверлей
    if (feedbackOverlay) {
        feedbackOverlay.addEventListener('click', function(e) {
            if (e.target === feedbackOverlay) {
                closeFeedbackForm();
            }
        });
    }
    
    // Закрытие формы по клавише Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && feedbackOverlay && feedbackOverlay.classList.contains('active')) {
            closeFeedbackForm();
        }
    });

    // Функциональность календаря
    const dateInput = document.getElementById('feedback-date');
    const timeInput = document.getElementById('feedback-time');

    if (dateInput) {
        dateInput.addEventListener('click', function() {
            showCalendar();
        });
    }

    if (timeInput) {
        timeInput.addEventListener('click', function() {
            showTimePicker();
        });
    }

    function showCalendar() {
        // Удаляем существующий календарь
        const existingCalendar = document.querySelector('.calendar-popup');
        if (existingCalendar) {
            existingCalendar.remove();
        }

        const calendar = document.createElement('div');
        calendar.className = 'calendar-popup';
        calendar.style.cssText = `
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #1a1a1a;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 20px;
            z-index: 4000;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            min-width: 300px;
        `;

        const today = new Date();
        const currentMonth = today.getMonth();
        const currentYear = today.getFullYear();

        let selectedMonth = currentMonth;
        let selectedYear = currentYear;

        function renderCalendar() {
            const firstDay = new Date(selectedYear, selectedMonth, 1);
            const lastDay = new Date(selectedYear, selectedMonth + 1, 0);
            const daysInMonth = lastDay.getDate();
            const startingDay = firstDay.getDay();

            const monthNames = [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ];

            calendar.innerHTML = `
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <button class="calendar-nav" style="background: none; border: none; color: white; cursor: pointer; padding: 5px;">‹</button>
                    <h3 style="color: white; margin: 0; font-family: 'Geist Mono', monospace;">${monthNames[selectedMonth]} ${selectedYear}</h3>
                    <button class="calendar-nav" style="background: none; border: none; color: white; cursor: pointer; padding: 5px;">›</button>
                </div>
                <div style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 5px; margin-bottom: 15px;">
                    <div style="color: #666; text-align: center; padding: 10px; font-family: 'Geist Mono', monospace; font-size: 12px;">Su</div>
                    <div style="color: #666; text-align: center; padding: 10px; font-family: 'Geist Mono', monospace; font-size: 12px;">Mo</div>
                    <div style="color: #666; text-align: center; padding: 10px; font-family: 'Geist Mono', monospace; font-size: 12px;">Tu</div>
                    <div style="color: #666; text-align: center; padding: 10px; font-family: 'Geist Mono', monospace; font-size: 12px;">We</div>
                    <div style="color: #666; text-align: center; padding: 10px; font-family: 'Geist Mono', monospace; font-size: 12px;">Th</div>
                    <div style="color: #666; text-align: center; padding: 10px; font-family: 'Geist Mono', monospace; font-size: 12px;">Fr</div>
                    <div style="color: #666; text-align: center; padding: 10px; font-family: 'Geist Mono', monospace; font-size: 12px;">Sa</div>
                </div>
                <div class="calendar-days" style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 5px;">
                </div>
            `;

            const daysContainer = calendar.querySelector('.calendar-days');
            
            // Добавляем пустые ячейки для дней до начала месяца
            for (let i = 0; i < startingDay; i++) {
                const emptyDay = document.createElement('div');
                emptyDay.style.cssText = `
                    padding: 10px;
                    text-align: center;
                    color: #333;
                    font-family: 'Geist Mono', monospace;
                    font-size: 14px;
                `;
                daysContainer.appendChild(emptyDay);
            }

            // Добавляем дни месяца
            for (let day = 1; day <= daysInMonth; day++) {
                const dayElement = document.createElement('div');
                const currentDate = new Date(selectedYear, selectedMonth, day);
                const isToday = currentDate.toDateString() === today.toDateString();
                const isPast = currentDate < new Date(today.getFullYear(), today.getMonth(), today.getDate());

                dayElement.style.cssText = `
                    padding: 10px;
                    text-align: center;
                    cursor: pointer;
                    border-radius: 6px;
                    font-family: 'Geist Mono', monospace;
                    font-size: 14px;
                    transition: all 0.3s ease;
                    ${isToday ? 'background: #007bff; color: white;' : 'color: white;'}
                    ${isPast ? 'opacity: 0.3; cursor: not-allowed;' : ''}
                `;
                dayElement.textContent = day;

                if (!isPast) {
                    dayElement.addEventListener('click', function() {
                        const selectedDate = new Date(selectedYear, selectedMonth, day);
                        const formattedDate = selectedDate.toLocaleDateString('en-GB');
                        dateInput.value = formattedDate;
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

            // Обработчики навигации
            const navButtons = calendar.querySelectorAll('.calendar-nav');
            navButtons[0].addEventListener('click', function() {
                if (selectedMonth === 0) {
                    selectedMonth = 11;
                    selectedYear--;
                } else {
                    selectedMonth--;
                }
                renderCalendar();
            });

            navButtons[1].addEventListener('click', function() {
                if (selectedMonth === 11) {
                    selectedMonth = 0;
                    selectedYear++;
                } else {
                    selectedMonth++;
                }
                renderCalendar();
            });
        }

        renderCalendar();
        document.body.appendChild(calendar);

        // Закрытие календаря при клике вне его
        document.addEventListener('click', function closeCalendar(e) {
            if (!calendar.contains(e.target) && e.target !== dateInput) {
                calendar.remove();
                document.removeEventListener('click', closeCalendar);
            }
        });
    }

    function showTimePicker() {
        // Удаляем существующий time picker
        const existingTimePicker = document.querySelector('.time-picker-popup');
        if (existingTimePicker) {
            existingTimePicker.remove();
        }

        const timePicker = document.createElement('div');
        timePicker.className = 'time-picker-popup';
        timePicker.style.cssText = `
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #1a1a1a;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 20px;
            z-index: 4000;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            min-width: 200px;
        `;

        timePicker.innerHTML = `
            <h3 style="color: white; margin: 0 0 15px 0; font-family: 'Geist Mono', monospace; text-align: center;">Select Time</h3>
            <div style="display: flex; gap: 10px; justify-content: center;">
                <select id="time-hour" style="
                    background: #333;
                    border: 1px solid rgba(255, 255, 255, 0.1);
                    border-radius: 6px;
                    color: white;
                    padding: 8px;
                    font-family: 'Geist Mono', monospace;
                    font-size: 14px;
                ">
                    ${Array.from({length: 24}, (_, i) => `<option value="${i.toString().padStart(2, '0')}">${i.toString().padStart(2, '0')}</option>`).join('')}
                </select>
                <span style="color: white; font-family: 'Geist Mono', monospace; font-size: 18px;">:</span>
                <select id="time-minute" style="
                    background: #333;
                    border: 1px solid rgba(255, 255, 255, 0.1);
                    border-radius: 6px;
                    color: white;
                    padding: 8px;
                    font-family: 'Geist Mono', monospace;
                    font-size: 14px;
                ">
                    ${Array.from({length: 60}, (_, i) => `<option value="${i.toString().padStart(2, '0')}">${i.toString().padStart(2, '0')}</option>`).join('')}
                </select>
            </div>
            <div style="display: flex; gap: 10px; justify-content: center; margin-top: 15px;">
                <button id="time-cancel" style="
                    background: #666;
                    border: none;
                    border-radius: 6px;
                    color: white;
                    padding: 8px 16px;
                    font-family: 'Geist Mono', monospace;
                    font-size: 14px;
                    cursor: pointer;
                ">Cancel</button>
                <button id="time-ok" style="
                    background: #007bff;
                    border: none;
                    border-radius: 6px;
                    color: white;
                    padding: 8px 16px;
                    font-family: 'Geist Mono', monospace;
                    font-size: 14px;
                    cursor: pointer;
                ">OK</button>
            </div>
        `;

        document.body.appendChild(timePicker);

        // Обработчики кнопок
        document.getElementById('time-cancel').addEventListener('click', function() {
            timePicker.remove();
        });

        document.getElementById('time-ok').addEventListener('click', function() {
            const hour = document.getElementById('time-hour').value;
            const minute = document.getElementById('time-minute').value;
            timeInput.value = `${hour}:${minute}`;
            timePicker.remove();
        });

        // Закрытие time picker при клике вне его
        document.addEventListener('click', function closeTimePicker(e) {
            if (!timePicker.contains(e.target) && e.target !== timeInput) {
                timePicker.remove();
                document.removeEventListener('click', closeTimePicker);
            }
        });
    }

    if (feedbackForm && submitButton) {
        feedbackForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Получаем данные формы
            const formData = new FormData(feedbackForm);
            const data = {
                name: formData.get('name') || '',
                phone: formData.get('phone') || '',
                date: formData.get('date') || '',
                time: formData.get('time') || ''
            };

            // Проверяем заполнение обязательных полей
            if (!data.name || !data.phone || !data.date || !data.time) {
                showMessage('Please fill in all form fields', 'error');
                return;
            }

            // Показываем индикацию загрузки
            setLoadingState(true);

            // Получаем CSRF токен
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            
            if (!csrfToken) {
                showMessage('Security error. Please refresh the page.', 'error');
                return;
            }
            
            // Отправляем запрос
            fetch('/send-telegram-message', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
                         .then(result => {
                 if (result.success) {
                     showMessage(result.message, 'success');
                     feedbackForm.reset();
                     // Закрываем форму после успешной отправки
                     setTimeout(() => {
                         closeFeedbackForm();
                     }, 2000);
                 } else {
                     showMessage(result.message || 'An error occurred while sending', 'error');
                 }
             })
            .catch(error => {
                console.error('Error:', error);
                showMessage('An error occurred while sending the message', 'error');
            })
            .finally(() => {
                setLoadingState(false);
            });
        });
    }

    /**
     * Установка состояния загрузки
     */
    function setLoadingState(isLoading) {
        if (isLoading) {
            submitButton.disabled = true;
            submitButton.textContent = 'Sending...';
            submitButton.style.opacity = '0.7';
            submitButton.style.cursor = 'not-allowed';
        } else {
            submitButton.disabled = false;
            submitButton.textContent = originalButtonText;
            submitButton.style.opacity = '1';
            submitButton.style.cursor = 'pointer';
        }
    }

    /**
     * Показ сообщений пользователю
     */
    function showMessage(message, type) {
        // Удаляем существующие сообщения
        const existingMessages = document.querySelectorAll('.feedback-message');
        existingMessages.forEach(msg => msg.remove());

        // Создаем новое сообщение
        const messageElement = document.createElement('div');
        messageElement.className = `feedback-message feedback-message--${type}`;
        messageElement.textContent = message;

        // Добавляем стили
        messageElement.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 8px;
            color: white;
            font-family: 'Geist Mono', monospace;
            font-size: 14px;
            z-index: 10000;
            max-width: 400px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            transform: translateX(100%);
            transition: transform 0.3s ease;
            ${type === 'success' ? 'background: #28a745;' : 'background: #dc3545;'}
        `;

        // Добавляем в DOM
        document.body.appendChild(messageElement);

        // Анимация появления
        setTimeout(() => {
            messageElement.style.transform = 'translateX(0)';
        }, 100);

        // Автоматическое удаление через 5 секунд
        setTimeout(() => {
            messageElement.style.transform = 'translateX(100%)';
            setTimeout(() => {
                if (messageElement.parentNode) {
                    messageElement.parentNode.removeChild(messageElement);
                }
            }, 300);
        }, 5000);
    }
});
