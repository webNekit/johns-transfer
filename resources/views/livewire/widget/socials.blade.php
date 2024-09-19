<ul class="footer__socials">
    @foreach ($social_links as $item)
        <li class="footer__socials-item">
            <a href="{{ $item['link'] }}" target="_blank" class="footer__socials-link">
                <img src="{{ url('storage', $item['icon']) }}" alt="" class="footer__socials-icon">
            </a>
        </li>
    @endforeach
</ul>