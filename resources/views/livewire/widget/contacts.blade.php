<ul class="footer__contacts-list">
    @foreach ($contact_phones as $item)
    <li class="footer__contacts-listItem">
        <a href="tel:+{{ $item['phone'] }}" class="footer__contacts-listLink">
            <i class="ri-phone-line"></i>
            <span class="footer__contacts-listSpan" data-phone-number="{{ $item['phone'] }}"></span>
        </a>
    </li>
    @endforeach
    @foreach ($contact_emails as $item)
    <li class="footer__contacts-listItem">
        <a href="mailto:{{ $item['email'] }}" class="footer__contacts-listLink">
            <i class="ri-mail-line"></i>
            <span class="footer__contacts-listSpan">{{ $item['email'] }}</span>
        </a>
    </li>
    @endforeach
    <li class="footer__contacts-listItem">
        <a href="{{ $contact_map_link }}" target="_blank" class="footer__contacts-listLink">
            <i class="ri-map-pin-line"></i>
            <span class="footer__contacts-listSpan">{{ $contact_address }}</span>
        </a>
    </li>
</ul>