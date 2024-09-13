function customSelect() {
    document.addEventListener('DOMContentLoaded', () => {
        const inputs = document.querySelectorAll('.order__form-input.custom-select');
      
        inputs.forEach(input => {
          const dropdown = input.nextElementSibling; // Получаем следующий элемент, который должен быть dropdown
          
          // Делаем input readonly (запрещаем ввод с клавиатуры)
          input.setAttribute('readonly', true);
      
          // Показывать или скрывать dropdown при клике на input
          input.addEventListener('click', (event) => {
            closeAllDropdowns(); // Закрыть все открытые dropdown перед открытием текущего
            dropdown.style.display = 'block'; // Показываем dropdown
            document.body.classList.add('no-scroll'); // Добавляем класс no-scroll к body
            event.stopPropagation(); // Останавливаем всплытие события
          });
      
          // Обработчик кликов на элементы списка dropdown
          dropdown.querySelectorAll('.order__form-listTarget').forEach(button => {
            button.addEventListener('click', (event) => {
              input.value = button.textContent; // Устанавливаем текст кнопки как значение input
              dropdown.style.display = 'none'; // Скрываем dropdown после выбора
              document.body.classList.remove('no-scroll'); // Удаляем класс no-scroll у body
              event.stopPropagation(); // Останавливаем всплытие события
            });
          });
        });
      
        // Закрытие dropdown при клике в любом месте вне dropdown
        document.addEventListener('click', () => {
          closeAllDropdowns();
        });
      
        // Функция для закрытия всех dropdown и удаления класса no-scroll
        function closeAllDropdowns() {
          document.querySelectorAll('.order__form-list').forEach(dropdown => {
            dropdown.style.display = 'none'; // Скрываем все dropdown
          });
          document.body.classList.remove('no-scroll'); // Удаляем класс no-scroll у body
        }
      });
      
}

export default customSelect;