<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\sentMailController;


class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sent:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email to users';

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
     * @return int
     */
    public function handle()
    {   
        $DataObj = new sentMailController();

        $success = $DataObj->sentMail();


        // $data->sentMail([
        //    'transId' => $trans_id,
        //    'userId' => $user_id
        // ]);

        //return Command::SUCCESS;

        \Log::info('Mail Send Successfully');
    }
}
