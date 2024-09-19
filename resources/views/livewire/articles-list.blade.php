<ul class="articles__list">
    @foreach($this->articles as $article)
        <li class="articles__item">
            <article class="articles__card">
                <div class="articles__card-preview">
                    <img loading="lazy" src="{{ url('storage/', $article->image) }}" alt="{{ $article->title }}" class="articles__card-previewImg" />
                </div>
                <div class="articles__card-detail">
                    <a href="{{ route('page.article-single', $article->id) }}" class="articles__card-more">
                        <h3 class="articles__card-name">{{ $article->title }} <i class="ri-arrow-right-line"></i></h3>
                    </a>
                    <p class="articles__card-text">{{ \Illuminate\Support\Str::limit($article->short_description, 100) }}</p>
                    <span class="articles__card-date">{{ $article->created_at->format('d.m.Y') }}</span>
                </div>
            </article>
        </li>
    @endforeach
</ul>
