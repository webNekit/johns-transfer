function mobileMenu() {
  document.addEventListener('DOMContentLoaded', () => {
      const menuBtn = document.querySelector('.menu-btn'); // Кнопка открытия меню
      const navigation = document.querySelector('.navigation'); // Навигационное меню
      const closeBtn = document.querySelector('.navigation__close-btn'); // Кнопка закрытия меню
      const dropdownLinks = document.querySelectorAll('.navigation__menu-item.dropdown-link > .navigation__menu-link');
      const regularLinks = document.querySelectorAll('.navigation__menu-link'); // Все ссылки
      const isMobile = window.matchMedia("(max-width: 768px)").matches;

      // Функция для открытия меню
      const openMenu = () => {
          navigation.classList.add('navigation--active');
          document.body.classList.add('no-scroll'); // Отключаем прокрутку при открытом меню
      };

      // Функция для закрытия меню
      const closeMenu = () => {
          navigation.classList.remove('navigation--active');
          document.body.classList.remove('no-scroll');
      };

      // Открытие меню по клику на кнопку
      menuBtn.addEventListener('click', openMenu);

      // Закрытие меню по клику на кнопку закрытия
      closeBtn.addEventListener('click', closeMenu);

      // Логика для открытия подменю на мобильных устройствах
      if (isMobile) {
          dropdownLinks.forEach(link => {
              link.addEventListener('click', (event) => {
                  event.preventDefault(); // Отключаем переход по ссылке
                  const submenu = link.nextElementSibling;
                  const isSubmenuOpen = submenu.style.display === 'block';

                  // Закрываем все подменю перед открытием нового
                  document.querySelectorAll('.navigation__submenu').forEach(sub => {
                      sub.style.display = 'none';
                  });

                  // Если подменю было закрыто, открываем его
                  if (!isSubmenuOpen) {
                      submenu.style.display = 'block';
                  }
              });
          });

          // Закрытие меню при клике на обычные ссылки, не внутри dropdown-link
          regularLinks.forEach(link => {
              link.addEventListener('click', (event) => {
                  const isDropdownLink = link.closest('.dropdown-link');

                  // Если это не dropdown-link, закрываем меню
                  if (!isDropdownLink) {
                      closeMenu();
                  }
              });
          });
      } else {
          // Логика для открытия dropdown на десктопе по наведению
          dropdownLinks.forEach(link => {
              link.parentElement.addEventListener('mouseenter', () => {
                  const submenu = link.nextElementSibling;
                  submenu.style.display = 'block';
              });

              link.parentElement.addEventListener('mouseleave', () => {
                  const submenu = link.nextElementSibling;
                  submenu.style.display = 'none';
              });
          });
      }

      // Закрытие меню при клике вне его области
      document.addEventListener('click', (event) => {
          if (!navigation.contains(event.target) && !menuBtn.contains(event.target)) {
              closeMenu();
          }
      });
  });
}

export default mobileMenu;
