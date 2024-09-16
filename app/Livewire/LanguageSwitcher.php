<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher extends Component
{
    public $currentLanguage;

    public function mount()
    {
        $this->currentLanguage = Session::get('locale', App::getLocale());
    }

    public function switchLanguage($lang)
    {
        $this->currentLanguage = $lang;
        Session::put('locale', $lang);
        App::setLocale($lang);

        // Перезагрузите страницу после изменения языка
        return redirect()->route('page.home');
    }
    

    public function render()
    {
        return view('livewire.language-switcher');
    }
}
