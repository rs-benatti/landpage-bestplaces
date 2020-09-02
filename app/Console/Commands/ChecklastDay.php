<?php

namespace App\Console\Commands;

use App\UserEmail;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ChecklastDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:checklastday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verifica se é o último dia de envio';

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
        $user_emails = UserEmail::get();
        $data = date('d m Y',strtotime(Carbon::now()));
        foreach($user_emails as $email){
            if($email->last_day){
                if(date('d m Y',strtotime((new Carbon($email->last_day))->addDays(1)) == $data)){
                    $email->delivered = 'YES';
                    $email->save();
                }
            }
        }
    }
}
