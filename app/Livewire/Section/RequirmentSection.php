<?php

namespace App\Livewire\Section;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Computed;
use Livewire\Component;

class RequirmentSection extends Component
{
    #[Computed()]
    public function getSectionData()
    {
        $locale = App::getLocale();
        $siteSettings = SiteSetting::first();


        return [
            'items' => collect($siteSettings->about_requirements)->map(function ($item) use ($locale) {
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
        return view('livewire.section.requirment-section', [
            'items' => $data['items'],
        ]);
    }
}
