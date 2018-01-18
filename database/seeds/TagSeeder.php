<?php

use App\Model\Tags;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Tags::truncate();
        for($i=1; $i<=100; $i++){
            $tags = new Tags();
            $slugname=$faker->firstName;
            $tags->name = $slugname;
            $tags->slug = str_slug($slugname);
            $tags->save();
        }

    }
}
