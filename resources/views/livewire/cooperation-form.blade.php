<div class="cooperation__left">
    <form wire:submit.prevent="submit" class="cooperation__form">
        <div class="cooperation__form-item">
            <label for="name-input" class="cooperation__form-label">{{ __('form.name_and_surname') }}</label>
            <input type="text" wire:model="name" class="cooperation__form-input" id="name-input" placeholder="Иванов Иван" required>
        </div>
        <div class="cooperation__form-item">
            <label for="phone-input" class="cooperation__form-label">{{ __('form.phone') }}</label>
            <input type="text" wire:model="phone" class="cooperation__form-input phone-mask" id="phone-input" placeholder="Введите номер телефона" required>
        </div>
        <div class="cooperation__form-item">
            <label for="email-input" class="cooperation__form-label">{{ __('form.email') }}</label>
            <input type="email" wire:model="email" class="cooperation__form-input" id="email-input" placeholder="Укажите email" required>
        </div>
        <div class="cooperation__form-item">
            <label for="country-input" class="cooperation__form-label">{{ __('form.country') }}</label>
            <input type="text" wire:model="country" class="cooperation__form-input" id="country-input" placeholder="Укажите страну" required>
        </div>
        <div class="cooperation__form-item">
            <label for="city-input" class="cooperation__form-label">{{ __('form.city') }}</label>
            <input type="text" wire:model="city" class="cooperation__form-input" id="city-input" placeholder="Укажите город" required>
        </div>
        <div class="cooperation__form-item">
            <label for="car-brand-input" class="cooperation__form-label">{{ __('form.car_brand') }}</label>
            <input type="text" wire:model="carBrand" class="cooperation__form-input" id="car-brand-input" placeholder="Укажите марку автомобиля" required>
        </div>
        <div class="cooperation__form-item">
            <label for="car-model-input" class="cooperation__form-label">{{ __('form.car_model') }}</label>
            <input type="text" wire:model="carModel" class="cooperation__form-input" id="car-model-input" placeholder="Укажите модель автомобиля" required>
        </div>
        <div class="cooperation__form-item">
            <label for="car-color-input" class="cooperation__form-label">{{ __('form.color_car') }}</label>
            <input type="text" wire:model="carColor" class="cooperation__form-input" id="car-color-input" placeholder="Укажите цвет автомобиля" required>
        </div>
        <div class="cooperation__form-item">
            <button type="submit" class="cooperation__form-button button button--primary">{{ __('form.send') }}</button>
        </div>
        @if (session()->has('message'))
            <div class="alert-form">
                {{ session('message') }}
            </div>
        @endif
    </form>
</div>
