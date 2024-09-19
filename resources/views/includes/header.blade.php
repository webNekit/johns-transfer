<header class="website__header header" id="header">
    <div class="container header__container">
        <div class="header__rowContent">
            <div class="header__col header__col--left">
                <div class="header__logo logo">
                    <a href="{{ route('page.home') }}" class="logo__link">
                        <img src="" alt="Логотип сайта John's vip transfer" class="logo__brand">
                    </a>
                </div>
            </div>
            <div class="header__col header__col--center">
                <nav class="header__navigation navigation">
                    <button class="navigation__close-btn">
                        <i class="ri-close-line"></i>
                    </button>
                    <menu class="navigation__menu">
                        <li class="navigation__menu-item"><a href="{{ route('page.catalog') }}" class="navigation__menu-link">Парк машин</a></li>
                        <livewire:dropdopwn-menu />
                        <li class="navigation__menu-item"><a href="{{ route('page.about') }}" class="navigation__menu-link">О&#160;нас</a></li>
                        <li class="navigation__menu-item"><a href="{{ route('page.articles') }}" class="navigation__menu-link">Статьи</a></li>
                        <li class="navigation__menu-item"><a href="{{ route('page.cooperation') }}" class="navigation__menu-link">Сотрудничество</a></li>
                        <li class="navigation__menu-item"><a href="{{ route('page.questions') }}" class="navigation__menu-link">Вопрос-Ответ</a></li>
                        <li class="navigation__menu-item"><a href="{{ route('page.contacts') }}" class="navigation__menu-link">Контакты</a></li>
                    </menu>
                </nav>
            </div>
            <div class="header__col header__col--right">
                <ul class="header__actions">
                    <li class="header__actions-item">
                        <button class="header__actions-tool button-call button button--outline" id="buttonCallModal">
                            Заказать звонок
                        </button>
                    </li>
                    <livewire:language-switcher />
                    <li class="header__actions-item">
                        <button class="header__actions-tool menu-btn">
                            <i class="ri-menu-line"></i>
                        </button>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</header>