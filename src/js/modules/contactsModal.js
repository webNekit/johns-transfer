function modalFunctionality() {
    document.addEventListener('DOMContentLoaded', () => {
        const openModalBtn = document.querySelector('.button-call'); // Кнопка открытия модального окна
        const closeModalBtn = document.querySelector('.contacts-modal__close-btn'); // Кнопка закрытия модального окна
        const modal = document.querySelector('.contacts-modal'); // Модальное окно

        // Функция для открытия модального окна
        const openModal = () => {
            modal.classList.add('contacts-modal--active');
            document.body.classList.add('no-scroll'); // Отключаем прокрутку страницы
        };

        // Функция для закрытия модального окна
        const closeModal = () => {
            modal.classList.remove('contacts-modal--active');
            document.body.classList.remove('no-scroll'); // Включаем прокрутку страницы
        };

        // Открытие модального окна по клику на кнопку
        openModalBtn.addEventListener('click', openModal);

        // Закрытие модального окна по клику на кнопку закрытия
        closeModalBtn.addEventListener('click', closeModal);

        // Закрытие модального окна при клике вне его контента
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                closeModal();
            }
        });
    });
}

export default modalFunctionality;
