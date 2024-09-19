<footer class="website__footer footer" id="footer">
    <div class="container footer__container">
        <div class="footer__rowTop">
            <div class="footer__left">
                <livewire:widget.site-info />
                <livewire:widget.socials />
                {{-- <a href="#!" class="footer__politics-link">Пользовательское соглашение</a> --}}
            </div>
            <div class="footer__right">
                <nav class="footer__nav">
                    <div class="footer__nav-item">
                        <h3 class="footer__nav-title">Меню</h3>
                        <menu class="footer__nav-menu">
                            <li class="footer__nav-menuItem">
                                <a href="{{ route('page.about') }}" class="footer__nav-menuLink">О&#160;нас</a>
                            </li>
                            <li class="footer__nav-menuItem">
                                <a href="{{ route('page.contacts') }}" class="footer__nav-menuLink">Контакты</a>
                            </li>
                            <li class="footer__nav-menuItem">
                                <a href="#" class="footer__nav-menuLink">Статьи</a>
                            </li>
                        </menu>
                    </div>
                    <div class="footer__nav-item">
                        <h3 class="footer__nav-title">Услуги</h3>
                        <menu class="footer__nav-menu">
                            <li class="footer__nav-menuItem">
                                <a href="#!" class="footer__nav-menuLink">Аренда авто</a>
                            </li>
                            <li class="footer__nav-menuItem">
                                <a href="#!" class="footer__nav-menuLink">Категории аренды</a>
                            </li>
                            <li class="footer__nav-menuItem">
                                <a href="#!" class="footer__nav-menuLink">Сопутствующие услуги</a>
                            </li>
                        </menu>
                    </div>
                </nav>
                <div class="footer__contacts">
                    <h3 class="footer__contacts-title">Контакты</h3>
                    <livewire:widget.contacts />
                </div>
            </div>
        </div>
        <div class="footer__rowBottom">
            <p class="footer__copyright">&#169; Copyright 2024 GlobalTransfer</p>
            <a href="https://t.me/nekitmochalov007" target="_blank" class="footer__author-website">Дизайн и&#160;разработка сайта nikDev</a>
        </div>
    </div>
</footer>