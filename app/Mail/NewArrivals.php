<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class NewArrivals extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $new_arrival, $user;
    public function __construct($user, $new_arrival)
    {
        $this->user = $user;
        $this->new_arrival = $new_arrival;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->new_arrival->attachment){
            $name = explode('/',$this->new_arrival->attachment);
            $arq = Storage::disk('public')->get($this->new_arrival->attachment);
            return $this->markdown('emails.newarrivals')
                ->subject($this->new_arrival->title)
                ->from('contato@sitedabip.com.br','Best Places')
                ->with([
                    'user' => $this->user,
                    'new_arrival' => $this->new_arrival
                ])->attachFromStorageDisk('public',$this->new_arrival->attachment,$this->new_arrival->attachment_name);
        }else{
            return $this->markdown('emails.newarrivals')
                ->subject($this->new_arrival->title)
                ->from('contato@sitedabip.com.br','Best Places')
                ->with([
                    'user' => $this->user,
                    'new_arrival' => $this->new_arrival
                ]);
        }

    }
}
