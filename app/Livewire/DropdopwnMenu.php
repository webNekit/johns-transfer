<?php

namespace App\Livewire;

use App\Models\CarClass;
use App\Models\OrderService;
use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Component;

class DropdopwnMenu extends Component
{

    #[Computed()]
    public function carClass()
    {
        $carClasses = CarClass::where('is_active', true)
            ->orderBy('created_at', 'asc')
            ->get();

        if ($carClasses->isEmpty()) {
            return null;
        }

        return $carClasses;
    }

    #[Computed()]
    public function services()
    {
        $services = Service::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        if ($services->isEmpty()) {
            return null;
        }

        return $services;
    }

    #[Computed()]
    public function otherServices()
    {
        $otherServices = OrderService::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        if ($otherServices->isEmpty()) {
            return null;
        }

        return $otherServices;
    }

    public function render()
    {
        return view('livewire.dropdopwn-menu', [
            'carClass' => $this->carClass(),
            'services' => $this->services(),
            'otherServices' => $this->otherServices(),
        ]);
    }
}
