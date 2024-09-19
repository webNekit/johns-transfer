<section class="main__wrapperSection contacts-page" id="contacts-page">
    <div class="container contacts-page__container">
        <div class="contacts-page__rowContent">
            <div class="contacts-page__colLeft">
                <div class="contacts-page__rowTop">
                    <div class="contacts-page__address">
                        <i class="ri-map-pin-line"></i>
                        <p class="contacts-page__addressText">{{ $contact_address }}</p>
                    </div>
                    <ul class="contacts-page__links">
                        @foreach ($contact_phones as $item)
                        <li class="contacts-page__links-item">
                            <a href="tel:{{ $item['phone'] }}" class="contacts-page__links-value">
                                <i class="ri-phone-line"></i>
                                <span class="contacts-page__links-valueSpan" data-phone-number="{{ $item['phone'] }}"></span>
                            </a>
                        </li>
                        @endforeach
                        @foreach ($contact_emails as $item)
                        <li class="contacts-page__links-item">
                            <a href="mailto:{{ $item['email'] }}" class="contacts-page__links-value">
                                <i class="ri-phone-line"></i>
                                <span class="contacts-page__links-valueSpan">{{ $item['email'] }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="contacts-page__rowBottom">
                    <div class="contacts-page__social-title">Мы в соц.сетях</div>
                    <ul class="contacts-page__socials">
                        @foreach ($social_links as $item)
                            <li class="contacts-page__socials-item">
                                <a href="{{ $item['link'] }}" target="_blank" class="contacts-page__socials-link">
                                    <img src="{{ url('storage', $item['icon']) }}" alt="" class="contacts-page__socials-icon">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="contacts-page__colRight">
                <div class="contacts-page__map" id="map">

                </div>
            </div>
        </div>
    </div>
</section>