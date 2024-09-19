<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class MainOrderForm extends Component
{
    public $location = '';
    public $name = '';
    public $phone = '';

    protected $rules = [
        'location' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
    ];

    public function submit()
    {
        $this->validate();

        // Отправка на почту
        Mail::raw(
            "Местоположение: {$this->location}\nИмя: {$this->name}\nТелефон: {$this->phone}",
            function ($message) {
                $message->to(env('MAIL_TO_ADDRESS'))
                        ->subject('Заявка на бронирование');
            }
        );

        // Отправка в Telegram
        $message = "Новая заявка на бронирование:\nМестоположение: {$this->location}\nИмя: {$this->name}\nТелефон: {$this->phone}";
        Http::post("https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendMessage", [
            'chat_id' => '-1002314766272',
            'text' => $message,
        ]);

        session()->flash('message', 'Ваша заявка успешно отправлена!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.main-order-form');
    }
}
