<?php

namespace App\Livewire;

use App\Models\CarClass;
use Livewire\Attributes\Computed;
use Livewire\Component;

class DropdopwnMenu extends Component
{

    #[Computed()]
    public function carClass()
    {
        $carClasses = CarClass::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        if ($carClasses->isEmpty()) {
            return null;
        }

        return $carClasses;
    }

    public function render()
    {
        return view('livewire.dropdopwn-menu', [
            'carClass' => $this->carClass(),
        ]);
    }
}
