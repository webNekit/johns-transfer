<?php

namespace App\Livewire\Section;

use App\Models\SiteSetting;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Contacts extends Component
{
    #[Computed()]
    public function getSectionData()
    {
        $siteSettings = SiteSetting::first();
        return [
            'contact_address' => $siteSettings->contact_address,
            'contact_map_link' => $siteSettings->contact_map_link,
            'social_links' => collect($siteSettings->social_links)->map(function ($item) {
                return [
                    'link' => $item["link"],
                    'icon' => $item["icon"],
                ];
            })->toArray(),
            'contact_phones' => collect($siteSettings->contact_phones)->map(function ($item) {
                return [
                    'phone' => $item["phone"],
                ];
            })->toArray(),
            'contact_emails' => collect($siteSettings->contact_emails)->map(function ($item) {
                return [
                    'email' => $item["email"],
                ];
            })->toArray(),
        ];
    }
    public function render()
    {
        $data = $this->getSectionData();
        return view('livewire.section.contacts', [
            'contact_address' => $data['contact_address'],
            'contact_map_link' => $data['contact_map_link'],
            'social_links' => $data['social_links'],
            'contact_phones' => $data['contact_phones'],
            'contact_emails' => $data['contact_emails'],
        ]);
    }
}
