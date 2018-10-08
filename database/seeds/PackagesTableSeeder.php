<?php

use Illuminate\Database\Seeder;
use App\Package;
use App\Feature;
use App\Subscription;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names=['Shop','Store','Minimart','Supermarket'];
        $products=['50','400','1000','1'];
        $prices=['19000','29000','49000','99000'];
        $subs=[1,4,6,12];
        $features=[
            1=>[
                'Up to 50 Products',
                '1 Free Domain',
            ],
            4=>[
                'Up to 50 Products',
                '1 Free Domain',

            ],
            6=>[
                'Up to 50 Products',
                '1 Free Domain',
                '2 Month Free'

            ],
            12=>[
                'Up to 50 Products',
                '1 Free Domain',
                '2 Month Free'

            ]
            ];


        foreach ($names as $key=>$name) {
            $package=new Package;
            $package->name=$name;
            $package->product=$products[$key];
            $package->price=$prices[$key];
            $package->description="This is for $name";
            $package->save();
        }

        foreach ($subs as $subk) {
            $sub=new Subscription;
            $sub->subscription=$subk;
            $sub->save();
        }

        foreach ($features as $key => $value) {
            foreach ($value as $feature) {
                $featurek = new Feature;
                $featurek->subscription_id=$key;
                $featurek->feature=$feature;
                $featurek->save();
            }
        }
    }
}
