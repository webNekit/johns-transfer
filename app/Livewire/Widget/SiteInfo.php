<?php

namespace App\Livewire\Widget;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Computed;
use Livewire\Component;

class SiteInfo extends Component
{

    #[Computed()]
    public function getSectionData()
    {
        $locale = App::getLocale();
        $siteSettings = SiteSetting::first();

        return [
            'description' => $siteSettings->{"site_description_{$locale}"},
        ];
    }

    public function render()
    {
        $data = $this->getSectionData();
        return view('livewire.widget.site-info', [
            'description' => $data['description'],
        ]);
    }
}
