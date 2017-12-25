<?php

use App\Model\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Post::truncate();
        for($i=1;$i<21;$i++){
            $post = new Post();
            $jobtitle = $faker->jobTitle;
            $post -> category_id = $faker->randomNumber(3);
            $post -> title = $jobtitle;
            $post -> content = $faker->realText(200,2);
            $post -> slug = str_slug($jobtitle);
            $post -> save();
        }
    }
}
