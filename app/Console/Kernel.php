<?php

namespace App\Console;

use App\Account;
use App\Mail\AccountExpired;
use App\ProductImage;
use Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use ImageOptimizer;
use Mail;

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

        // check account expiry every minute
        // in future we can check only in the night
        $schedule->call(function () {
            //lets get all the accounts which are not expired
            #if expiry date reached then we will deactivate the account
            $accounts = Account::withOutGlobalScopes()->where('id', '!=', 1)->where('status', 1)->get();
            foreach ($accounts as $account) {
                if ($account->ended_at->lte(Carbon::now()->SubDays(3))) {
                    $account->status = 0;
                    $account->save();
                }
                if ($account->hasExpired()) {
                    //send email
                    Mail::to($account->email)->cc('info@dukafy.co.tz')->send(new AccountExpired($account));
                }

                // if($accounts){

                // }
            }
        })->everyMinute();

        # we will optimize images every day midnight if any
        $schedule->call(function () {
            $images = ProductImage::withOutGlobalScopes()->where('optimized', 0)->get();
            foreach ($images as $image) {
                $location = public_path('images/' . $image->image);
                ImageOptimizer::optimize($location);
                $image->optimized = 1;
                $image->save();
            }
        })->daily();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
