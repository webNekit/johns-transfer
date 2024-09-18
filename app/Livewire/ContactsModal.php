<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactsModal extends Component
{
    public $name = '';
    public $phone = '';
    public $email = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
    ];

    public function submit()
    {
        $this->validate();

        // Отправка на почту
        Mail::raw(
            "Имя: {$this->name}\nТелефон: {$this->phone}\nEmail: {$this->email}",
            function ($message) {
                $message->to(env('MAIL_TO_ADDRESS'))
                        ->subject('Заявка на обратный звонок');
            }
        );

        // Отправка в Telegram
        $message = "Новая заявка на обратный звонок:\nИмя: {$this->name}\nТелефон: {$this->phone}\nEmail: {$this->email}";
        Http::post("https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendMessage", [
            'chat_id' => '-1002314766272',
            'text' => $message,
        ]);

        session()->flash('message', 'Заявка отправлена успешно!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contacts-modal');
    }
}
