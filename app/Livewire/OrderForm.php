<?php

namespace App\Livewire;

use App\Notifications\SendTelegramNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class OrderForm extends Component
{
    public $carClass; // Это свойство для хранения данных о классе автомобиля
    public $location;
    public $full_name;
    public $phone;

    protected $rules = [
        'location' => 'required|string',
        'full_name' => 'required|string',
        'phone' => 'required|string',
    ];

    public function mount($carClass = null)
    {
        $this->carClass = $carClass;
    }

    public function submit()
    {
        $this->validate(); // Применение правил валидации

        // ID вашего канала
        $telegramChatId = '-1002314766272';
        
        // Получаем email из .env
        $email = env('MAIL_TO_ADDRESS', 'nayskom@gmail.com');

        // Отправка уведомлений (на почту и в Telegram)
        Notification::route('telegram', $telegramChatId)
            ->route('mail', $email)
            ->notify(new SendTelegramNotification($this->location, $this->full_name, $this->phone, $this->carClass->name_ru));

        // Очистка формы
        $this->reset(['location', 'full_name', 'phone']);

        session()->flash('success', 'Ваша заявка успешно отправлена!');
    }

    public function render()
    {
        return view('livewire.order-form');
    }
}
