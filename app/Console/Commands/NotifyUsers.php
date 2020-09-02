<?php

namespace App\Console\Commands;

use App\Email;
use App\Jobs\SendMailJob;
use App\Mail\NewArrivals;
use App\UserEmail;
use Carbon\Carbon;
use Illuminate\Console\Command;
use App\FormResponse;
class NotifyUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia email para os usuários';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $now = date("H:i",strtotime(Carbon::now()));
        $user_emails = UserEmail::get();
        if($user_emails!==null){
            $user_emailss = $user_emails->where('date_string',$now)->where('delivered','=','NO');
	foreach($user_emailss as $message){
                $diaSemana = strtolower(Carbon::now()->format('l'));
                switch($message->frequency){
                    case 'TwoPW':
                        $this->send($message);
                        break;
                    case 'TwoPW':
                        if($diaSemana == 'monday' or $diaSemana == 'wednesday'){

                            $this->send($message);
                        }
                        break;
                    case 'ThreePw':
                        if($diaSemana == 'monday' or $diaSemana == 'wednesday' or $diaSemana == 'friday'){
                            $this->send($message);
                        }
                        break;
                    case 'Weekly':
                        if($diaSemana == 'monday'){
                            $this->send($message);
                        }
                        break;
                    case 'Monthly':
                        $start = Carbon::now()->startOfMonth();
                        if(date('d m Y',strtotime($start)) == date('d m Y', strtotime(Carbon::now()))){
                            $this->send($message);
                        }
                        break;
                }
            }
        }
    }

    public function send($message){
            $user = FormResponse::find($message->user_id);
            $email = Email::find($message->email_id);
                dispatch(new SendMailJob(
                    $user->email, new NewArrivals($user,$email)
                ));
        $message->last_day = Carbon::now();
        $message->send_timer = Carbon::now();
        $message->save();
    }
}
