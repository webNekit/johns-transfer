<div>
    @if (session()->has('message'))
        <div class="alert-form">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="order__formWrapper">
        <div class="order__form-group">
            <div class="order__form-item">
                <label for="from-input" class="order__form-label">Местоположение</label>
                <input type="text" wire:model="location" class="order__form-input" id="from-input" placeholder="Город, улица, дом" required />
            </div>
            <div class="order__form-item">
                <label for="name-input" class="order__form-label">Имя</label>
                <input type="text" wire:model="name" class="order__form-input" id="name-input" placeholder="Укажите Ваше имя" required />
            </div>
            <div class="order__form-item">
                <label for="phone-input" class="order__form-label">Номер телефона</label>
                <input type="text" wire:model="phone" class="order__form-input phone-mask" id="phone-input-2" placeholder="Укажите номер телефона" required />
            </div>
            <div class="order__form-item">
                <button type="submit" class="order__form-button button button--primary">Забронировать</button>
            </div>
        </div>
    </form>
</div>
