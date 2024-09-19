<?php

namespace App\Livewire\Section;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Computed;
use Livewire\Component;

class AboutSection extends Component
{

    #[Computed()]
    public function getSectionData()
    {
        $locale = App::getLocale();
        $siteSettings = SiteSetting::first();

        if (!$siteSettings) {
            return [
                'title' => 'Укажите заголовок секции',
                'description' => 'Укажите описание секции',
                'image' => 'default-image.jpg',
                'requirements' => []
            ];
        }

        return [
            'title' => $siteSettings->{"about_title_{$locale}"},
            'description' => $siteSettings->{"about_description_{$locale}"},
            'image' => $siteSettings->about_image,
            'requirements' => collect($siteSettings->advantages_items)->map(function ($item) use ($locale) {
                return [
                    'name' => $item["requirement_title_{$locale}"] ?? '',
                    'description' => $item["requirement_description_{$locale}"] ?? '',
                ];
            })->toArray()
        ];
    }

    public function render()
    {
        $data = $this->getSectionData();
        return view('livewire.section.about-section', [
            'title' => $data['title'],
            'description' => $data['description'],
            'requirements' => $data['requirements'],
            'image' => $data['image'],
        ]);
    }
}
