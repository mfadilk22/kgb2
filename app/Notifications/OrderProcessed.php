<?php

namespace App\Notifications;

use App\Channels\Messages\WhatsAppMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Channels\WhatsAppChannel;
use App\Models\DataKGBModel;

class OrderProcessed extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $order;
    public function __construct(DataKGBModel $order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [WhatsAppChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function toWhatsApp($notifiable)
    {
        //$orderUrl = url("/orders/{$this->order->id}");
        //$company = 'Acme';
        //$deliveryDate = $this->order->created_at->addDays(4)->toFormattedDateString();

        return (new WhatsAppMessage)
            ->content("Assalamualaikum wr.wb Bapak/Ibu Pemberitahuan bagi Bapak/Ibu pegawai BPS Aceh Utara, bahwa Bapak/Ibu akan melakukan KGB pada bulan depan. Terima Kasih. Wassalam ");
    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
