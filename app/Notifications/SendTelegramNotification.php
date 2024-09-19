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
     */
    public function via($notifiable)
    {
        return ['mail', 'telegram'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Новая заявка на услугу')
            ->greeting('Здравствуйте!')
            ->line('Поступила новая заявка на услугу.')
            ->line("Местоположение: {$this->location}")
            ->line("Имя: {$this->full_name}")
            ->line("Телефон: {$this->phone}")
            ->line("Услуга: {$this->carClassName}")
            ->line('Спасибо за использование нашего сервиса!');
    }

    /**
     * Get the telegram representation of the notification.
     */
    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->content("Новая заявка на услугу!\n\n" .
                      "Местоположение: {$this->location}\n" .
                      "Имя: {$this->full_name}\n" .
                      "Телефон: {$this->phone}\n" .
                      "Услуга: {$this->carClassName}");
    }

    /**
     * Get the array representation of the notification.
     */
    public function toArray($notifiable)
    {
        return [
            // Можно добавить дополнительные данные
        ];
    }
}
