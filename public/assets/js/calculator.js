document.addEventListener('DOMContentLoaded', function() {
    const calculator = {
        currentStep: 1,
        totalSteps: 4,
        data: {
            kitchenType: null,
            area: null,
            facadeType: null,
            contact: {
                phone: '',
                name: '',
                method: 'phone'
            }
        },
        
        init() {
            // Проверяем, есть ли элементы калькулятора на странице
            if (!this.isCalculatorPage()) {
                return;
            }
            
            this.bindEvents();
            this.updateNavigation();
            this.checkMobileDevice();
        },
        
        isCalculatorPage() {
            // Проверяем наличие основного контейнера калькулятора
            return document.querySelector('.calculator-container') !== null;
        },
        
        checkMobileDevice() {
            const isMobile = window.innerWidth <= 580;
            if (isMobile) {
                document.body.classList.add('calculator-mobile');
            }
        },
        
        bindEvents() {
            // Обработчики для опций выбора (Step 1 и Step 3)
            const calculatorOptions = document.querySelectorAll('.calculator-option');
            if (calculatorOptions.length > 0) {
                calculatorOptions.forEach(option => {
                    option.addEventListener('click', (e) => {
                        this.selectOption(e.currentTarget);
                    });
                });
            }
            
            // Обработчики для радиокнопок (Step 2)
            const calculatorRadios = document.querySelectorAll('.calculator-radio');
            if (calculatorRadios.length > 0) {
                calculatorRadios.forEach(radio => {
                    radio.addEventListener('change', (e) => {
                        this.selectRadio(e.target);
                    });
                });
            }
            
            // Обработчики для чекбокса (Step 4)
            const calculatorCheckboxes = document.querySelectorAll('.calculator-checkbox');
            if (calculatorCheckboxes.length > 0) {
                calculatorCheckboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', (e) => {
                        this.updateSubmitButton();
                    });
                });
            }
            
            // Обработчики для полей формы (Step 4)
            const calculatorFormInputs = document.querySelectorAll('.calculator-form-input');
            if (calculatorFormInputs.length > 0) {
                calculatorFormInputs.forEach(input => {
                    input.addEventListener('input', (e) => {
                        this.updateFormData(e.target);
                    });
                });
            }
            
            // Навигационные кнопки
            const nextBtn = document.querySelector('.calculator-next');
            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    this.nextStep();
                });
            }
            
            const prevBtn = document.querySelector('.calculator-prev');
            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    this.prevStep();
                });
            }
            
            // Отправка формы
            const calculatorForm = document.getElementById('calculator-form');
            if (calculatorForm) {
                calculatorForm.addEventListener('submit', (e) => {
                    e.preventDefault();
                    this.submitForm();
                });
            }
            
            // Маска для телефона
            this.initPhoneMask();
            
            // Обработчик изменения размера окна
            window.addEventListener('resize', () => {
                this.checkMobileDevice();
            });
        },
        
        selectOption(optionElement) {
            const step = optionElement.closest('.calculator-step').dataset.step;
            const value = optionElement.dataset.value;
            
            // Убираем выделение со всех опций в текущем шаге
            optionElement.closest('.calculator-options-grid').querySelectorAll('.calculator-option').forEach(opt => {
                opt.classList.remove('selected');
            });
            
            // Выделяем выбранную опцию
            optionElement.classList.add('selected');
            
            // Сохраняем данные
            if (step === '1') {
                this.data.kitchenType = value;
            } else if (step === '3') {
                this.data.facadeType = value;
            }
            
            this.updateNavigation();
        },
        
        selectRadio(radioElement) {
            const name = radioElement.name;
            const value = radioElement.value;
            
            if (name === 'area') {
                this.data.area = value;
            } else if (name === 'contact-method') {
                this.data.contact.method = value;
            }
            
            this.updateNavigation();
        },
        
        updateFormData(inputElement) {
            const field = inputElement.id.replace('calculator-', '');
            
            if (field === 'phone') {
                this.data.contact.phone = inputElement.value;
            } else if (field === 'name') {
                this.data.contact.name = inputElement.value;
            }
            
            this.updateSubmitButton();
        },
        
        updateNavigation() {
            const nextBtn = document.querySelector('.calculator-next');
            const prevBtn = document.querySelector('.calculator-prev');
            
            if (!nextBtn || !prevBtn) return;
            
            // Проверяем, можно ли перейти к следующему шагу
            const canProceed = this.canProceedToNext();
            nextBtn.disabled = !canProceed;
            
            // Показываем/скрываем кнопку "Назад"
            if (this.currentStep > 1) {
                prevBtn.style.display = 'block';
            } else {
                prevBtn.style.display = 'none';
            }
            
            // Меняем текст кнопки "Далее" на последнем шаге
            if (this.currentStep === this.totalSteps) {
                nextBtn.style.display = 'none';
            } else {
                nextBtn.style.display = 'block';
            }
        },
        
        canProceedToNext() {
            switch (this.currentStep) {
                case 1:
                    return this.data.kitchenType !== null;
                case 2:
                    return this.data.area !== null;
                case 3:
                    return this.data.facadeType !== null;
                case 4:
                    return this.isFormValid();
                default:
                    return false;
            }
        },
        
        isFormValid() {
            const phone = document.getElementById('calculator-phone');
            const name = document.getElementById('calculator-name');
            const privacy = document.getElementById('calculator-privacy');
            
            if (!phone || !name || !privacy) return false;
            
            return phone.value.trim() !== '' && name.value.trim() !== '' && privacy.checked;
        },
        
        updateSubmitButton() {
            const submitBtn = document.querySelector('.calculator-form-submit');
            if (submitBtn) {
                submitBtn.disabled = !this.isFormValid();
            }
        },
        
        nextStep() {
            if (this.currentStep < this.totalSteps && this.canProceedToNext()) {
                this.showStep(this.currentStep + 1);
            }
        },
        
        prevStep() {
            if (this.currentStep > 1) {
                this.showStep(this.currentStep - 1);
            }
        },
        
        showStep(stepNumber) {
            // Скрываем все шаги
            document.querySelectorAll('.calculator-step').forEach(step => {
                step.style.display = 'none';
            });
            
            // Показываем нужный шаг
            const targetStep = document.querySelector(`[data-step="${stepNumber}"]`);
            if (targetStep) {
                targetStep.style.display = 'block';
                this.currentStep = stepNumber;
                this.updateNavigation();
                
                // Плавная прокрутка к началу шага на мобильных устройствах
                if (window.innerWidth <= 580) {
                    targetStep.scrollIntoView({ 
                        behavior: 'smooth', 
                        block: 'start' 
                    });
                }
            }
        },
        
        initPhoneMask() {
            const phoneInput = document.getElementById('calculator-phone');
            
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
        },
        
        submitForm() {
            if (!this.isFormValid()) {
                this.showMessage('Please fill in all form fields', 'error');
                return;
            }
            
            // Показываем индикацию загрузки
            this.setLoadingState(true);
            
            // Получаем CSRF токен
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            
            if (!csrfToken) {
                this.showMessage('Security error. Please refresh the page.', 'error');
                this.setLoadingState(false);
                return;
            }
            
            // Подготавливаем данные для отправки
            const data = {
                name: this.data.contact.name,
                phone: this.data.contact.phone,
                contact_method: this.data.contact.method,
                kitchen_type: this.data.kitchenType,
                area: this.data.area,
                facade_type: this.data.facadeType,
                source: 'calculator'
            };
            
            // Отправляем запрос
            fetch('/send-calculator-message', {
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
                    this.showMessage(result.message, 'success');
                    // Показываем сообщение об успешной отправке
                    setTimeout(() => {
                        this.showSuccessMessage();
                    }, 2000);
                } else {
                    this.showMessage(result.message || 'An error occurred while sending', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                this.showMessage('An error occurred while sending the message', 'error');
            })
            .finally(() => {
                this.setLoadingState(false);
            });
        },
        
        setLoadingState(isLoading) {
            const submitBtn = document.querySelector('.calculator-form-submit');
            if (!submitBtn) return;
            
            if (isLoading) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Sending...';
                submitBtn.style.opacity = '0.7';
                submitBtn.style.cursor = 'not-allowed';
            } else {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Get calculation';
                submitBtn.style.opacity = '1';
                submitBtn.style.cursor = 'pointer';
            }
        },
        
        showMessage(message, type) {
            // Удаляем существующие сообщения
            const existingMessages = document.querySelectorAll('.calculator-message');
            existingMessages.forEach(msg => msg.remove());

            // Создаем новое сообщение
            const messageElement = document.createElement('div');
            messageElement.className = `calculator-message calculator-message--${type}`;
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
        },
        
        showSuccessMessage() {
            const form = document.getElementById('calculator-form');
            if (!form) return;
            
            const successMessage = document.createElement('div');
            successMessage.className = 'calculator-success';
            successMessage.innerHTML = `
                <h3>Thank you!</h3>
                <p>We will contact you shortly with the cost estimate and catalogue.</p>
            `;
            
            form.innerHTML = '';
            form.appendChild(successMessage);
        }
    };
    
    // Инициализируем калькулятор
    calculator.init();
});
