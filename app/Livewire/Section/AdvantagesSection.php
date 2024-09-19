<?php

namespace App\Livewire\Section;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Computed;
use Livewire\Component;

class AdvantagesSection extends Component
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
                'items' => []
            ];
        }

        return [
            'title' => $siteSettings->{"advantages_title_{$locale}"},
            'description' => $siteSettings->{"advantages_description_{$locale}"},
            'items' => collect($siteSettings->advantages_items)->map(function ($item) use ($locale) {
                return [
                    'name' => $item["item_title_{$locale}"] ?? '',
                    'description' => $item["item_description_{$locale}"] ?? '',
                ];
            })->toArray()
        ];
    }


    public function render()
    {
        $data = $this->getSectionData();
        return view('livewire.section.advantages-section', [
            'title' => $data['title'],
            'description' => $data['description'],
            'items' => $data['items']
        ]);
    }
}
