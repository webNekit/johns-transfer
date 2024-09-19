<?php

namespace App\Livewire\Widget;

use App\Models\SiteSetting;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Whatsapp extends Component
{
    #[Computed()]
    public function getData()
    {
        $siteSettings = SiteSetting::first();
        if(!$siteSettings) {
            return [
                'title' => 'Укажите заголовок для кнопки',
                'link' => 'Укажите ссылку',
            ];
        }

        return [
            'title' => $siteSettings->whatsapp_title,
            'link' => $siteSettings->whatsapp_link,
        ];
    }

    public function render()
    {
        $data = $this->getData();
        return view('livewire.widget.whatsapp', [
            'title' => $data['title'],
            'link' => $data['link'],
        ]);
    }
}
