<?php

use Illuminate\Database\Seeder;
use App\SliderImage;

class SliderImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $number_of_images=3;
        for ($i=0; $i < 3; $i++) {
            $slider=new SliderImage;
            $slider->image=null;
            $slider->save();
        }
    }
}
