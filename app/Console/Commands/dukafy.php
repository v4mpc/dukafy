<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Account;

class dukafy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'account:delete {domain}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete account from dukafy';

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
        $domain=$this->argument('domain');

        $account =Account::where('domain', $domain)->get();

        if (count($account)) {
            //delete the users
            foreach ($account as $account) {
                foreach ($account->users as $user) {
                    $user->delete();
                }
    
                foreach ($account->slideImages as $image) {
                    $image->delete();
                }
            }
            
            $account->delete();

            $this->info('Account deleted!');
        } else {
            $this->error('Account not found!');
        }
    }
}
