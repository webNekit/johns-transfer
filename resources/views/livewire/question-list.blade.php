<ul class="questions__list">
    @foreach ($questions as $question)
    <li class="questions__item">
        <div class="questions__card">
            <button class="questions__control">
                <span class="questions__control-text">{{ $question->name }}</span>
                <span class="questions__control-icon"><i class="ri-add-line"></i></span>
            </button>
            <div class="questions__content">
                <p class="questions__content-text">{!! $question->text !!}</p>
            </div>
        </div>
    </li>
    @endforeach
</ul>