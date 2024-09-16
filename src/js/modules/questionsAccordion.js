function initAccordion() {
    const accordionControls = document.querySelectorAll('.questions__control');

    accordionControls.forEach(control => {
        control.addEventListener('click', () => {
            const content = control.nextElementSibling; // Контент аккордеона
            const icon = control.querySelector('.questions__control-icon'); // Иконка

            // Проверка состояния открытия
            const isOpen = content.style.maxHeight;

            if (!isOpen) {
                // Открытие аккордеона
                content.style.maxHeight = content.scrollHeight + 'px'; // Устанавливаем высоту контента
                content.style.padding = '18px'; // Добавляем padding
                icon.style.transform = 'rotate(45deg)'; // Поворачиваем иконку
                control.style.paddingBottom = '18px'; // Добавляем padding-bottom к кнопке управления
                content.style.borderTop = '1px solid var(--color-separator)'; // Добавляем border-top
            } else {
                // Закрытие аккордеона
                content.style.maxHeight = null; // Скрываем контент
                content.style.padding = '0'; // Убираем padding
                icon.style.transform = 'rotate(0deg)'; // Возвращаем иконку в исходное положение
                control.style.paddingBottom = '0'; // Убираем padding-bottom
                content.style.borderTop = 'none'; // Убираем border-top
            }
        });
    });
}


export default initAccordion;
