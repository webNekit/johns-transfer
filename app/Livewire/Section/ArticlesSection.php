<?php

namespace App\Livewire\Section;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ArticlesSection extends Component
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
            'title' => $siteSettings->{"articles_title_{$locale}"},
            'description' => $siteSettings->{"articles_description_{$locale}"},
        ];
    }
    public function render()
    {
        $data = $this->getSectionData();
        return view('livewire.section.articles-section', [
            'title' => $data['title'],
            'description' => $data['description'],
        ]);
    }
}
