<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
class SendMails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send{user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send drip mail to a user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
	//protected $drip;
	
    public function __construct()
    {
        parent::__construct();
		$this->drip = "";
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
		$user = $this->argument('user');
		echo $user;
		$row = User::where('name', $user)
			->first();

		dd($row->name);

        //
		 //$name = $this->ask('What is your name?');
		// if($name == "user"){
		//	 $this->info('Display this on the screen');
		 //}
		 //else
		//	 $this->info('error'); 
		//$this->info('Display this on the screen');
		//$this->drip->send(User::find($this->argument('user')));
    }
}
