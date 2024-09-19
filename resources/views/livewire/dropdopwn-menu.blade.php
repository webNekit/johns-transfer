<li class="navigation__menu-item dropdown-link">
    <a href="#!" class="navigation__menu-link">{{ __('menu.services') }} <i class="ri-arrow-down-s-line"></i></a>
    <ul class="navigation__submenu">
        <li class="navigation__submenu-item">
            <a href="#!" class="navigation__submenu-link">{{ __('menu.rent_car') }}<i class="ri-arrow-right-s-line"></i></a>
            <ul>
                @foreach ($carClass as $carClassItem)
                    <li>
                        <a href="{{ route('page.carclass', $carClassItem->id) }}">{{ $carClassItem->name }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="navigation__submenu-item">
            <a href="#!" class="navigation__submenu-link">{{ __('menu.rental_categories') }}<i class="ri-arrow-right-s-line"></i></a>
            <ul>
                @foreach ($services as $service)
                    <li>
                        <a href="{{ route('page.service', $service->id) }}">{{ $service->name }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="navigation__submenu-item">
            <a href="#!" class="navigation__submenu-link">{{ __('menu.related_services') }}<i class="ri-arrow-right-s-line"></i></a>
            <ul>
                @foreach ($otherServices as $service)
                    <li>
                        <a href="{{ route('page.otherService', $service->id) }}">{{ $service->name }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
</li>