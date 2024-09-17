<ul class="auto-class__grid">
    @foreach ($carClass as $class)
    <li class="auto-class__item">
        <div class="auto-class__card">
            <a href="{{ route('page.carclass', $class->id) }}" class="auto-class__card-link">
                <div class="auto-class__card-wrapper">
                    <img loading="lazy" src="{{ url('storage', $class->icon) }}" alt="Изображение класса {{ $class->name }}" class="auto-class__card-img" />
                    <h3 class="auto-class__card-name">{{ $class->name }}</h3>
                </div>
            </a>
        </div>
    </li>
    @endforeach
</ul>