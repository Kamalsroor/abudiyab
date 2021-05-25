<?php

namespace App\Mail;

use App\Models\Custmerrequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;

class invoiceMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $order;
    public $receiving_branch;
    public $delivery_branch;
    public $reciving_date;
    public $delivery_date;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$order,$receiving_branch,$delivery_branch,$reciving_date,$delivery_date)
    {
        //
        $this->email=$email;
        $this->order=$order;
        $this->receiving_branch=$receiving_branch;
        $this->delivery_branch=$delivery_branch;
        $this->reciving_date=$reciving_date;
        $this->delivery_date=$delivery_date;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $is_confirmed = true ;
        $user = Custmerrequest::where('user_id',auth()->id())->orderBy('created_at', 'DESC')->first();
        // dd($user->getFirstMediaUrl('identityBack'));
        if($user){

            $newRequest = $user;
           if($user->is_confirmed != "confirmed"){

                $is_confirmed = false ;
                $user = Custmerrequest::where('user_id',auth()->id())->where('is_confirmed' , 'confirmed')->orderBy('created_at', 'DESC')->first();
           }
        }

        return $this->subject('Mail from abudiab')
        ->view('maileclipse::templates.invoiceEmail',['user' => $user]);
    }
}
