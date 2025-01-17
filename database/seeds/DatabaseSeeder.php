<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(SliderTableShiftSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        $this->call(UserTableSeeder::class);


        // $this->call(ProductImagesTableSeeder::class);
        // $this->call(ShiftDatabaseSeeder::class);
        // $this->call(SliderImagesSeeder::class);
        // $this->call(PackagesTableSeeder::class);
        // $this->call(AccountTableSeeder::class);
    }
}
