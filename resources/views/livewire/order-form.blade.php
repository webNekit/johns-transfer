<div class="services__order">
    <h3 class="services__order-title">Оставьте заявку и мы Вам перезвоним!</h3>
    <form wire:submit.prevent="submit" class="services__order-form">
        <input type="text" wire:model="carClassName" value="{{ $carClass->name_ru }}" readonly style="display: none">
        
        <div class="services__order-item">
            <label for="location" class="services__order-label">Местоположение</label>
            <input type="text" class="services__order-input" id="location" wire:model="location" placeholder="Город, улица, дом" required />
            @error('location') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="services__order-item">
            <label for="full_name" class="services__order-label">Имя и фамилия</label>
            <input type="text" class="services__order-input" id="full_name" wire:model="full_name" placeholder="Укажите имя" required />
            @error('full_name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="services__order-item">
            <label for="phone" class="services__order-label">Номер телефона</label>
            <input type="text" class="services__order-input phone-mask" id="phone" wire:model="phone" placeholder="Укажите телефон" required />
            @error('phone') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="services__order-item">
            <button class="services__order-button button button--primary">Отправить заявку</button>
        </div>
        @if (session()->has('success'))
            <div class="alert-form">
                {{ session('success') }}
            </div>
        @endif
    </form>
</div>
