<?php

namespace App\Notifications\Accounts;

use App\Models\Car;
use App\Models\Offer;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Config;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use URL;

class VerifyEmailNotification extends Notification
{
    use Queueable;
    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $verificationUrl =  URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getEmailForVerification()),
            ]
        );
        $todaydate = Carbon::today();
        $offers=Car::where('category_id' , 15)->take(2)->get();
        $homeUrl='https://abudiyab-soft.com/fleet';
        return (new MailMessage)
            ->view('maileclipse::templates.verifyEmialTemplate', ['url' => $verificationUrl,'offers'=>$offers,'homeUrl'=>$homeUrl]);
    }
}
