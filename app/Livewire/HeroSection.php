<?php

namespace App\Livewire;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Computed;
use Livewire\Component;

class HeroSection extends Component
{
    #[Computed]
    public function heroData()
    {
        $siteSetting = SiteSetting::first();

        // Определим текущий язык
        $locale = App::getLocale(); // Получение текущего языка (например, 'ru' или 'en')

        // Определяем поле для заголовка в зависимости от языка
        $titleField = 'hero_title_' . $locale;

        return [
            'title' => $siteSetting->$titleField ?? 'Default Title',
            'image' => $siteSetting->hero_image ?? 'default-image.jpg',
        ];
    }

    public function render()
    {
        return view('livewire.hero-section', [
            'heroData' => $this->heroData() // Передаем данные в шаблон
        ]);
    }
}
