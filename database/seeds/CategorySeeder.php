<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        $faker = Faker\Factory::create();
        for($i=0;$i<21;$i++){
            $category = new Category();
            $category->name=$faker->name;
            $category->save();
        }
    }
}
