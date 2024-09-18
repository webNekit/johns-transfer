<li class="navigation__menu-item dropdown-link">
    <a href="#!" class="navigation__menu-link">Услуги <i class="ri-arrow-down-s-line"></i></a>
    <ul class="navigation__submenu">
        <li class="navigation__submenu-item">
            <a href="#!" class="navigation__submenu-link">Аренда авто<i class="ri-arrow-right-s-line"></i></a>
            <ul>
                @foreach ($carClass as $carClassItem)
                    <li>
                        <a href="{{ route('page.carclass', $carClassItem->id) }}">{{ $carClassItem->name }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="navigation__submenu-item">
            <a href="#!" class="navigation__submenu-link">Категории аренды<i class="ri-arrow-right-s-line"></i></a>
            <ul>
                @foreach ($services as $service)
                    <li>
                        <a href="{{ route('page.service', $service->id) }}">{{ $service->name }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="navigation__submenu-item">
            <a href="#!" class="navigation__submenu-link">Сопутствующие услуги<i class="ri-arrow-right-s-line"></i></a>
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