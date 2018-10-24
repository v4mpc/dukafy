<?php

use Illuminate\Database\Seeder;
use App\SliderImage;

class SliderTableShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images=DB::connection('mysql1')->table('slider_images')->select('image')->get();

        foreach ($images as $image) {
            $img=new SliderImage;
            $img->image=$image->image;
            $img->account_id=5;
            $img->save();
        }
    }
}
