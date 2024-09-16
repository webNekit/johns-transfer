<!-- resources/views/livewire/language-switcher.blade.php -->
<li class="header__actions-item">
    <button class="header__actions-tool button-language" wire:click="switchLanguage('{{ $currentLanguage }}')" id="buttonLanguage">{{ strtoupper($currentLanguage) }}</button>
    <ul class="header__actions-languageWrapper" id="languageDropdown">
        <li class="header__actions-languageItem">
            <button class="header__actions-languageButton" wire:click="switchLanguage('ru')">RU</button>
        </li>
        <li class="header__actions-languageItem">
            <button class="header__actions-languageButton" wire:click="switchLanguage('en')">EN</button>
        </li>
    </ul>
</li>
