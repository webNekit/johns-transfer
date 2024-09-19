<footer class="website__footer footer" id="footer">
    <div class="container footer__container">
        <div class="footer__rowTop">
            <div class="footer__left">
                <livewire:widget.site-info />
                <livewire:widget.socials />
            </div>
            <div class="footer__right">
                <nav class="footer__nav">
                    <div class="footer__nav-item">
                        <h3 class="footer__nav-title">Меню</h3>
                        <menu class="footer__nav-menu">
                            <li class="footer__nav-menuItem">
                                <a href="{{ route('page.about') }}" class="footer__nav-menuLink">{{ __('menu.about_us') }}</a>
                            </li>
                            <li class="footer__nav-menuItem">
                                <a href="{{ route('page.contacts') }}" class="footer__nav-menuLink">{{ __('menu.contacts') }}</a>
                            </li>
                            <li class="footer__nav-menuItem">
                                <a href="{{ route('page.catalog') }}" class="footer__nav-menuLink">{{ __('menu.fleet_of_cars') }}</a>
                            </li>
                        </menu>
                    </div>
                    <div class="footer__nav-item">
                        <menu class="footer__nav-menu">
                            <li class="footer__nav-menuItem">
                                <a href="{{ route('page.cooperation') }}" class="footer__nav-menuLink">{{ __('menu.cooperation') }}</a>
                            </li>
                            <li class="footer__nav-menuItem">
                                <a href="{{ route('page.questions') }}" class="footer__nav-menuLink">{{ __('menu.question') }}</a>
                            </li>
                            <li class="footer__nav-menuItem">
                                <a href="{{ route('page.articles') }}" class="footer__nav-menuLink">{{ __('menu.articles') }}</a>
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