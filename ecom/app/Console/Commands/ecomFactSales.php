<?php

namespace App\Console\Commands;
namespace App\Http\Controllers;
use Illuminate\Console\Command;
use App\ecom;
use DB;
use App\Http\Controllers\Controller;
class ecomFactSales extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ecom:sta';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //
	    echo "hello \n";
	    $cus_ids = ecom::where('customer_key','<=',10)
		    ->selectRaw('distinct customer_key as cus_id')
		    ->orderby('cus_id','ASC')
		    ->get(['cus_id'])
		    ->pluck('cus_id')
		    ->toArray();
	    foreach($cus_ids as $cus_id){
	        $counts = ecom::where('customer_key',$cus_id)
			->count();
		echo "$cus_id   $counts \n";
	    } 

	  
	    
	    
    }
}
