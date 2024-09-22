document.addEventListener('DOMContentLoaded', function () {
    // Проверяем размер экрана
    if (window.innerWidth <= 768) {
        // Находим все ссылки подменю
        const submenuLinks = document.querySelectorAll('.navigation__submenu-link');

        submenuLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault(); // Отключаем стандартное поведение ссылки

                // Находим подменю (следующий <ul> за ссылкой)
                const submenu = link.nextElementSibling;

                // Скрываем все открытые подменю
                document.querySelectorAll('.navigation__submenu-item ul.active').forEach(el => {
                    if (el !== submenu) {
                        el.classList.remove('active'); // Убираем класс active
                    }
                });

                // Переключаем текущее подменю
                submenu.classList.toggle('active'); // Открываем/закрываем текущее подменю
            });
        });
    }
});
