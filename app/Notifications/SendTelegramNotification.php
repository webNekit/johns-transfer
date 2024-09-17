<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class SendTelegramNotification extends Notification
{
    use Queueable;

    public $location;
    public $full_name;
    public $phone;
    public $carClassName;

    /**
     * Create a new notification instance.
     */
    public function __construct($location, $full_name, $phone, $carClassName)
    {
        $this->location = $location;
        $this->full_name = $full_name;
        $this->phone = $phone;
        $this->carClassName = $carClassName;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['telegram'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toTelegram(object $notifiable): TelegramMessage
    {
        return TelegramMessage::create()
            ->content("Новая заявка на услугу!\n\n" .
                      "Местоположение: {$this->location}\n" .
                      "Имя: {$this->full_name}\n" .
                      "Телефон: {$this->phone}\n" .
                      "Класс автомобиля: {$this->carClassName}");
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
