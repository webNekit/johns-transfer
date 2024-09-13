function mobileMenu()
{
    document.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.querySelector('.menu-btn'); // Кнопка открытия меню
        const navigation = document.querySelector('.navigation'); // Меню
        const closeBtn = document.querySelector('.navigation__close-btn'); // Кнопка закрытия меню
        const menuLinks = document.querySelectorAll('.navigation__menu-link'); // Ссылки в меню
      
        // Функция для открытия меню
        const openMenu = () => {
          navigation.classList.add('navigation--active');
          document.body.classList.add('no-scroll'); // Запрещаем прокрутку страницы при открытом меню
        };
      
        // Функция для закрытия меню
        const closeMenu = () => {
          navigation.classList.remove('navigation--active');
          document.body.classList.remove('no-scroll'); // Разрешаем прокрутку после закрытия меню
        };
      
        // Открытие меню при клике на кнопку
        menuBtn.addEventListener('click', openMenu);
      
        // Закрытие меню при клике на кнопку закрытия
        closeBtn.addEventListener('click', closeMenu);
      
        // Закрытие меню при клике на любую ссылку в меню
        menuLinks.forEach(link => {
          link.addEventListener('click', closeMenu);
        });
      
        // Дополнительная проверка для закрытия меню при клике вне его (по пустому месту)
        document.addEventListener('click', (event) => {
          if (!navigation.contains(event.target) && !menuBtn.contains(event.target)) {
            closeMenu();
          }
        });
      });
      
}
export default mobileMenu;