<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // imran
        // $user = new App\User;
        // $user->name="Imran";
        // $user->email="imran@legendaryits.com";
        // $user->password=bcrypt('imran@786');
        // $user->save();

        // // ali
        // $user = new App\User;
        // $user->name="Ali";
        // $user->email="ali@adshapemedia.com";
        // $user->password=bcrypt('ali@786');
        // $user->save();

        // // shabbar
        // $user = new App\User;
        // $user->name="Shabbar";
        // $user->email="shabbar@adshapemedia.com";
        // $user->password=bcrypt('shabbar@786');
        // $user->save();


        $user = new App\User;
        $user->name="Vampc";
        $user->email="yona101992@gmail.com";
        $user->password=bcrypt('123456');
        $user->save();

        
    }
}
