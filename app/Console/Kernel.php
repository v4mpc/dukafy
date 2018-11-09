<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Account;
use Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();



       
        $schedule->call(function () {
            //lets get all the accounts which are not expired
            $accounts=Account::where('id', '!=', 1)->where('status', 1)->get();

            foreach ($accounts as $account) {
                if ($account->hasExpired()) {
                    $account->status=0;
                    $account->save();
                }
            }
        })->everyMinute();
        
       
        #if expiry date reached then we will deactivate the account
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
