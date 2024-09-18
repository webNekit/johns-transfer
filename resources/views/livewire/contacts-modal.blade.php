<div>
    <form wire:submit.prevent="submit" class="contacts-modal__form">
        <div class="contacts-modal__form-item">
            <label for="name-input" class="contacts-modal__form-label">Введите ваше имя</label>
            <input type="text" wire:model="name" class="contacts-modal__form-input" id="name-input" placeholder="Иван Иванович" required>
        </div>
        <div class="contacts-modal__form-item">
            <label for="contact-phone" class="contacts-modal__form-label">Введите ваш телефон</label>
            <input type="tel" wire:model="phone" class="contacts-modal__form-input phone-mask" id="contact-phone" placeholder="7900800300" required>
        </div>
        <div class="contacts-modal__form-item">
            <label for="contact-email" class="contacts-modal__form-label">Введите вашу почту</label>
            <input type="email" wire:model="email" class="contacts-modal__form-input" id="contact-email" placeholder="user@example.com" required>
        </div>
        <div class="contacts-modal__form-item">
            <button type="submit" class="contacts-modal__form-button button button--primary">Отправить заявку</button>
        </div>
        @if (session()->has('message'))
            <div class="alert-form">
                {{ session('message') }}
            </div>
        @endif
    </form>
</div>