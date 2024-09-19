<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class CooperationForm extends Component
{
    public $name = '';
    public $phone = '';
    public $email = '';
    public $country = '';
    public $city = '';
    public $carBrand = '';
    public $carModel = '';
    public $carColor = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'country' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'carBrand' => 'required|string|max:255',
        'carModel' => 'required|string|max:255',
        'carColor' => 'required|string|max:255',
    ];

    public function submit()
    {
        $this->validate();
        
        Mail::raw(
            "Имя: {$this->name}\nТелефон: {$this->phone}\nEmail: {$this->email}\nСтрана: {$this->country}\nГород: {$this->city}\nМарка автомобиля: {$this->carBrand}\nМодель автомобиля: {$this->carModel}\nЦвет автомобиля: {$this->carColor}",
            function ($message) {
                $message->to(env('MAIL_TO_ADDRESS'))
                        ->subject('Заявка на сотрудничество');
            }
        );

        $message = "Новая заявка на сотрудничество:\nИмя: {$this->name}\nТелефон: {$this->phone}\nEmail: {$this->email}\nСтрана: {$this->country}\nГород: {$this->city}\nМарка автомобиля: {$this->carBrand}\nМодель автомобиля: {$this->carModel}\nЦвет автомобиля: {$this->carColor}";
        Http::post("https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendMessage", [
            'chat_id' => '-1002314766272',
            'text' => $message,
        ]);

        session()->flash('message', 'Заявка отправлена успешно!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.cooperation-form');
    }
}
