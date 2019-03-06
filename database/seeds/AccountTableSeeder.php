<?php

use Illuminate\Database\Seeder;
use App\Account;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account=new Account();
        $account->name='Dukafy Dashboard';
        $account->email='dukafy@dukafy.co.tz';
        $account->phone='07777777';
        $account->domain='dukafy.co.tz';
        $account->status=1;
        $account->package_id=1;
        $account->subscription_id=1;
        $account->save();
    }
}
