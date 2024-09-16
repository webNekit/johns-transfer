<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') |{{ env('APP_NAME') }}</title>
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="Разработка сайтов: Мочалов Никита - nayskom@gmail.com" />
    <meta http-equiv="cache-control" content="max-age=1800" />
    <meta name="theme-color" content="#317EFB" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:description" content="@yield('description')" />
    <meta name="twitter:card" content="@yield('image')" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="@yield('image')" />
    <meta name="robots" content="index, nofollow" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.svg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    @livewireStyles
</head>
<body class="website" id="website">
@include('includes.header')
    <div class="website__layout">
        <main class="website__main main" id="main">
            <div class="main__wrapper">
                @yield('content')
            </div>
        </main>
    </div>
    <div class="whatsapp-widget">
    <a href="" target="_blank" class="whatsapp-widget__button">
        <img loading="lazy" src="./img/social-wp.png" alt="Логотип whatsapp" class="whatsapp-widget__button-icon">
    </a>
</div>
<div class="contacts-modal" id="contacts-modal">
    <div class="contacts-modal__container">
        <div class="contacts-modal__left">
            <img loading="lazy" src="./img/form-img-2.jpg" alt="" class="contacts-modal__left-img">
        </div>
        <div class="contacts-modal__right">
            <button class="contacts-modal__close-btn">
                <i class="ri-close-line"></i>
            </button>
            <div class="contacts-modal__right-wrapper">
                <div class="contacts-modal__rowHead">
                    <h2 class="contacts-modal__title">Закажите звонок</h2>
                    <h3 class="contacts-modal__subtitle">и&#160;мы&#160;ответим в&#160;кратчайшие сроки</h3>
                </div>
                <form class="contacts-modal__form">
                    <div class="contacts-modal__form-item">
                        <label for="name-input" class="contacts-modal__form-label">Введите ваше имя</label>
                        <input type="text" class="contacts-modal__form-input" id="name-input" placeholder="Иван Иванович" required>
                    </div>
                    <div class="contacts-modal__form-item">
                        <label for="contact-phone" class="contacts-modal__form-label">Введите ваш телефон</label>
                        <input type="tel" class="contacts-modal__form-input phone-mask" id="contact-phone" placeholder="7900800300" required>
                    </div>
                    <div class="contacts-modal__form-item">
                        <label for="" class="contacts-modal__form-label">Введите вашу почту</label>
                        <input type="email" class="contacts-modal__form-input" id="name-input" placeholder="user@example.com" required>
                    </div>
                    <div class="contacts-modal__form-item">
                        <button class="contacts-modal__form-button button button--primary">Отправить заявку</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
<script src={{ asset('assets/js/index.bundle.js') }}></script>
@livewireScripts
</body>
</html>