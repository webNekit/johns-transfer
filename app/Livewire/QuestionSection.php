<?php

namespace App\Livewire;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Computed;
use Livewire\Component;

class QuestionSection extends Component
{

    #[Computed()]
    public function getSectionData()
    {
        $locale = App::getLocale();
        $siteSettings = SiteSetting::first();

        if(!$siteSettings) {
            return [
                'title' => 'Укажите заголовок секции',
                'description' => 'Укажите описание секции',
            ];
        }

        return [
            'title' => $siteSettings->{"question_title_{$locale}"},
            'description' => $siteSettings->{"question_description_{$locale}"},
        ];
    }

    public function render()
    {
        $data = $this->getSectionData();
        return view('livewire.question-section', [
            'title' => $data['title'],
            'description' => $data['description'],
        ]);
    }
}
