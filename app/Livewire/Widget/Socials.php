<?php

namespace App\Livewire\Widget;

use App\Models\SiteSetting;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Socials extends Component
{
    #[Computed()]
    public function getSectionData()
    {
        $siteSettings = SiteSetting::first();
        return [
            'social_links' => collect($siteSettings->social_links)->map(function ($item) {
                return [
                    'link' => $item["link"],
                    'icon' => $item["icon"],
                ];
            })->toArray(),
        ];
    }

    public function render()
    {
        $data = $this->getSectionData();
        return view('livewire.widget.socials', [
            'social_links' => $data['social_links'],
        ]);
    }
}
