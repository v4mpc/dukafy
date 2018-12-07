<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Setting;
use App\SliderImage;
use App\ProductImage;

class DeleteOphanImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete All Images(public/images) that are not in Database';

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
        // $product_images=ProductImage::all(['image'])->toArray();
        // $SliderImages=SliderImage::all(['image'])->toArray();
        // $user_images=User::all(['image'])->toArray();
        // $settings=Setting::all(['logo'])->toArray();

        // $files = Storage::disk('images')->files()->map(function ($item, $key) {
        //     if (in_array($item, $product_images)) {

        //     }
        // });
        // $headers=['Orphan?','Name'];
        // $this->table($headers, $files);

        
        // $this->line($files);
    }
}
